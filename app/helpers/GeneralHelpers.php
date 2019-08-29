<?php


if (! function_exists('getAge')) {
    function getAge($birthdate)
    {

        $years = \Carbon\Carbon::parse($birthdate)->age;

        return $years;
    }
}


if (! function_exists('getDAS')) {
    function getDAS($type, $tjc, $sjc, $pga, $esr = 0 ,$crp = 0)
    {
        $result= '';
        $tjc_root = sqrt($tjc);
        $sjc_root = sqrt($sjc);

        if($type == 'esr'){
            $result = (0.56*$tjc_root) + (0.28*$sjc_root)+ (0.7 * log($esr)) + (0.14*$pga);

        }elseif ($type == 'crp_mg_l'){

        }elseif ($type == 'crp_mg_dl'){

        }

        return $result;
    }
}

if (! function_exists('getBMI')) {
    function getBMI($height = 0 , $weight = 0)
    {
        $bmi_fixed_2 = 0;
        if($height != 0 && $weight != 0 ){
            $height_square = (($height * $height)/100)/100;
            $bmi_fixed_2 = number_format(($weight/$height_square),2,'.','');
        }

        return $bmi_fixed_2;
    }
}