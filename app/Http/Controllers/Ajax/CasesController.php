<?php

namespace App\Http\Controllers\Ajax;

use App\AromLibrary\AbstractClasses\Authentication;
use App\AromLibrary\Modules\SystemCasesDatatable;
use App\AromLibrary\Repository\SystemCasesRepository;
use App\AromLibrary\Traits\AuthTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class CasesController extends Controller
{

    public function getList(Request $request)
    {
        return (new SystemCasesDatatable(new SystemCasesRepository()))->getList($request);
    }

}
