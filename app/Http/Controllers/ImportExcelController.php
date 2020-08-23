<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{

    function index(){
        return view('import_excel');
    }


    function import(Request $request){

        $this->validate($request,[
            'select_file'   => 'required|mimes:xls,xlsx'
        ]);

        if(Auth::user() && Auth::user()->permission != 1){
            dd('you must be an authorized admin to perform this action');
        }
        $path = $request->file('select_file')->getRealPath();
        $data = Excel::import(new ExcelImport(4), $request->file('select_file'));

        return back();

    }


}
