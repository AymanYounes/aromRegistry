<?php

namespace App\Imports;

use App\Models\Answer;
use App\Models\Case_answer;
use App\Models\Cases;
use App\Models\Patient;
use App\Models\Questionnaire;
use Carbon\Carbon;
use Illuminate\Console\OutputStyle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use mysql_xdevapi\Exception;

class ExcelImport implements ToArray, WithChunkReading
{
    use Importable;

    private $project_4_array = [
            9 => 192,
            10 => 194,
            11 => 195,
            12 => 189,
            13 => 198,
            14 => 193,
            15 => 197,
            16 => 190,
            17 => 199,
            18 => 200,
            19 => 203,
            20 => 202,
            21 => 201,
            22 => 204,
            23 => 208,

            25 => 205,
            26 => 214,
            27 => 253,
            28 => 250,
            29 => 251,
            30 => 252,
            31 => 249,
            32 => 220,
            33 => 221,
            34 => 222,
            35 => 225,
            36 => 227,
            37 => 223,
            38 => 224,
            39 => 226,
            40 => 238,
            41 => 239,
            42 => 240,
            43 => 241,
            44 => 242,
            45 => 243,
            46 => 244,
            47 => 247,

        ];

    private $project_id;
    public function __construct($project_id)
    {
        $this->project_id = $project_id;
    }






    /**
     * @param array $array
     */
    public function array(array $array)
    {
        $handled_array = [];
        foreach($array as $key =>$row){

            if($row[0] && $row[0] != 'Frist name' && $row[0] != 'First name'){
                $birthdate ='';
                $visit_date ='';
                $age ='';
                if($row[2]){
                    $birthdate = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[2]));
                    $birthdate = Carbon::parse($birthdate)->format('Y-m-d');
                    $visit_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]));
                    $visit_date = Carbon::parse($visit_date)->format('Y-m-d');
                    $age = Carbon::parse($row[2])->age;
                }
                $smoking = $row[24];
                if($row[24]){
                    if(in_array($row[24], ['Heavy', 'lite']) ){
                        $smoking = 'Yes';
                    } elseif (in_array($row[24], ['Negative', 'None'])){
                        $smoking = 'No';
                    }
                }
                $handled_array[] = $new_row = [
                    'name'     => $row[0] .' '. $row[1],
                    'birthday'    => $birthdate,
                    'age'    => $age,
                    'gender'    => $row[4],
                    'visit_date'    => $visit_date,
                    'height'    => $row[6],
                    'weight'    => $row[7],
                    'veil'    => $row[8],
                    'smoking'    => $smoking,
                ];
                try{
                    DB::beginTransaction();

                    $patient = $this->checkPatient($new_row);

                    $case = new Cases();
                    $case->user_id = Auth::user()->id;
                    $case->project_id = $this->project_id;
                    $case->patient_id = $patient->id;
                    $case->visit = $visit_date;
                    $case->save();

                    for($i = 0; $i < array_key_last($this->project_4_array); $i++){

                        if(array_key_exists($i,$this->project_4_array)){
                            $case_answers = new Case_answer();
                            $case_answers->case_id = $case->id;
                            $case_answers->questionnaire_id = $this->project_4_array[$i];
                            $question = Questionnaire::find($this->project_4_array[$i]);
                            $answer = Answer::where('questionnaire_id', $this->project_4_array[$i])
                                ->where('answer', $row[$i])
                                ->first();
                            if($answer && $question->type == 1){
                                $case_answers->answer_id = $answer->id;
                                $case_answers->answer = $answer->answer;
                            } elseif($question->type == 0) {
//                                $case_answers->answer_id = 0;
                                $case_answers->answer = $row[$i];
                            }

                            $case_answers->save();
                        }
                    }


                } catch (\Exception $e){
                    DB::rollBack();
                    $errors []= $e;
                }
                DB::commit();
            }
        }
        if(isset($errors)){
            dd($errors);
        }

        return $handled_array;
    }

    public function checkPatient($row){
        $patient = Patient::where('name', $row['name'])->where('birthday',$row['birthday'])->first();
        if(!$patient) {
            $patient = new Patient();
            $patient->name = $row['name'];
            $patient->birthday = $row['birthday'];
//            $patient->age = $row['age'];
            $patient->height = $row['height'];
            $patient->weight = $row['weight'];
            $patient->veil = $row['veil'];
            $patient->smoking = $row['smoking'];
            $patient->save();

        }

        return $patient;
    }


    public function model(array $row)
    {
        return [
            'location'     => $row[0],
            'patient_id'    => $row[1],
            'gender' => $row[2],
            'birth_date' => $row[3],
            'visit_date' => $row[4],
        ];
    }

    /**
     * @return int
     */
    public function chunkSize(): int
    {
        return 50;
    }

    /**
     * @return OutputStyle
     */
    public function getConsoleOutput(): OutputStyle
    {
        // TODO: Implement getConsoleOutput() method.
    }
}
