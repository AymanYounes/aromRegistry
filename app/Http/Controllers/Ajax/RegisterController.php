<?php

namespace App\Http\Controllers\Ajax;

use App\AromLibrary\AbstractClasses\Authentication;
use App\AromLibrary\Traits\AuthTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Authentication
{
    use AuthTrait;
    /***
     * check Email already exists in user or no
     * @param $request
     **/

    public function postCheckUserEmail(Request $request)
    {
        $data = User::where('email', '=', $request['email'])
            ->count();
        if ($data > 0) {
            return 'false';
        } else {
            return 'true';
        }

    }

}
