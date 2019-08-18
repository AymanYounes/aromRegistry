<?php

namespace App\AromLibrary\Repository;

use Illuminate\Support\Facades\DB;
use App\Models\Member;

class SystemCasesRepository
{

    public function getCasesForDatatable($params)
    {
        $results = DB::table('cases as c')
                            ->leftJoin('users as u', 'u.id', '=', 'c.user_id')
                            ->leftJoin('projects as pro', 'pro.id', '=', 'c.project_id')
                            ->leftJoin('patients as pat', 'pat.id', '=', 'c.patient_id')
                            ->whereNull('c.deleted_at')
                            ->select(['c.id',
                                    'c.visit',
                                    'u.name as user_name',
                                    'u.email',
                                    'u.title',
                                    'u.address',
                                    'u.phone',
                                    'pro.name as project_name',
                                    'pro.name_full',
                                    'pro.image',
                                    'pat.name as patient_name',
                                    'pat.address',
                                    'pat.phone',
                                    'pat.birthday',
                                    'pat.gender',
                                    'pat.residency',
                                    'pat.occupation',
                                    'pat.weight',
                                    'pat.height',
                                    'pat.bmi',
                                    'pat.veil',
                                    'pat.smoking',
                                    'pat.family_history',
                                    'pat.informed_consent'
                                ]
                            );

        return $results;
    }

}