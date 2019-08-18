<?php

namespace App\AromLibrary\Modules;

use App\AromLibrary\Repository\SystemCasesRepository;
use App\Library\Repository\MembersRepository;
use function foo\func;
use Illuminate\Support\Facades\Auth;
use yajra\Datatables\Datatables;
use App\Models\Member;
use App\Models\Country;

class SystemCasesDatatable
{
    protected $repo;

    /**
     * MembersDatatable constructor.
     * @param $repo
     */
    public function __construct(SystemCasesRepository $repo)
    {
        $this->repo = $repo;
    }


    public function getList($request)
    {
        $members = $this->repo->getCasesForDatatable($request);

        return Datatables::of($members)
            ->filter(function ($query) use ($request) {

                function filterResults($query, $request)
                {
                    if ($request->has('id') && $request->get('id') != "") {
                        $query->where('c.id', $request->get('id'));
                    }

                    if ($request->has('user_name') && $request->get('user_name') != "") {
                        $query->where('u.name', 'like', "%{$request->get('user_name')}%");
                    }

                    if ($request->has('user_email') && $request->get('user_email') != "") {
                        $query->where('u.email', 'like', "%{$request->get('user_email')}%");
                    }

                    if ($request->has('user_phone') && $request->get('user_phone') != "") {
                        $query->where('u.user_phone', 'like', "%{$request->get('user_phone')}%");
                    }

                    if ($request->has('project_name') && $request->get('project_name') != "") {
                        $query->where('pro.name', 'like', "%{$request->get('project_name')}%");
                    }

                    if ($request->has('patient_name') && $request->get('patient_name') != "") {
                        $query->where('pat.name', 'like', "%{$request->get('patient_name')}%");
                    }

                    if ($request->has('patient_phone') && $request->get('patient_phone') != "") {
                        $query->where('pat.phone', 'like', "%{$request->get('patient_phone')}%");
                    }

                    if ($request->has('patient_birthday') && $request->get('patient_birthday') != "") {
                        $query->where('pat.birthday', 'like', "%{$request->get('patient_birthday')}%");
                    }

                    if ($request->has('patient_gender') && $request->get('patient_gender') != "") {
                        $query->having('pat.gender', '=', $request->get('patient_gender'));
                    }

                    if ($request->has('patient_residency') && $request->get('patient_residency') != "") {
                        $query->where('p.residency', 'like', "%{$request->get('patient_residency')}%");
                    }

                    if ($request->has('patient_occupation') && $request->get('patient_occupation') != "") {
                        $query->where('p.occupation', 'like', "%{$request->get('patient_occupation')}%");
                    }

                    if ($request->has('patient_weight') && $request->get('patient_weight') != "") {
                        $query->having('pat.weight', '=', $request->get('patient_weight'));
                    }

                    if ($request->has('patient_height') && $request->get('patient_height') != "") {
                        $query->having('pat.height', '=', $request->get('patient_height'));
                    }

                    if ($request->has('patient_bmi') && $request->get('patient_bmi') != "") {
                        $query->having('pat.bmi', '=', $request->get('patient_bmi'));
                    }

                    if ($request->has('patient_veil') && $request->get('patient_veil') != "") {
                        $query->having('pat.veil', '=', $request->get('patient_veil'));
                    }

                    if ($request->has('patient_smoking') && $request->get('patient_smoking') != "") {
                        $query->having('pat.smoking', '=', $request->get('patient_smoking'));
                    }

                    if ($request->has('patient_family_history') && $request->get('patient_family_history') != "") {
                        $query->having('pat.family_history', '=', $request->get('patient_family_history'));
                    }

                    if ($request->has('patient_informed_consent') && $request->get('patient_informed_consent') != "") {
                        $query->having('pat.informed_consent', '=', $request->get('patient_informed_consent'));
                    }

                }

                filterResults($query, $request);
            })
//            ->orderColumn("member_full_name", "m.first_name $1")
//            ->addColumn('verified', function($members){
//                $ret = '';
//                if ($members->email_verified === 1) {
//                    $ret .= '<div class="label label-success" title="Email verified">Email</div>';
//                } else {
//                    $ret .= '<div class="label label-danger" title="Email unverified">Email</div>';
//                }
//
//                if ($members->phone_verified === 1) {
//                    $ret .= '<div class="label label-success" title="Phone verified">Phone</div>';
//                } else {
//                    $ret .= '<div class="label label-danger" title="Phone unverified">Phone</div>';
//                }
//
//                return $ret;
//            })
//            ->addColumn('type', function($members){
//                return $members->countList > 0?'<div class="label label-info">Host</div>':'<div class="label label-default">Guest</div>';
//             })
            ->addColumn('action', function ($members) {

                $str = "";

//                $str .= '<a href="#" data-id="' . $members->id . '" class="view-member" title="View member details"><i class="fa fa-eye" aria-hidden="true"></i></a>';
//
//                $str .= '<a href="#" data-id="' . $members->id . '" class="view-member-activity" title="View member activity"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>';
//
//                $str .= '<a href="#" data-id="' . $members->id . '" class="view-member-log" title="View member log"><i class="fa fa-history" aria-hidden="true"></i></a>';
//
//                $str .= '<a href="#" data-id="' . $members->id . '" data-email="' . $members->email . '" class="change-member-email" title="change member email"><i class="fa fa-envelope"  style="" aria-hidden="true"></i></a>';

                return $str;
            })

            ->make(true);
    }
}
