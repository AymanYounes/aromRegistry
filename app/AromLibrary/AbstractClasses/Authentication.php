<?php

namespace App\AromLibrary\AbstractClasses;

use App\AromLibrary\Traits\AuthTrait;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Authentication extends Controller
{

    use AuthTrait;


    /**
    * to Valedate all registerData
    * @param $registerData
    * @return array of error
    */
    private function validateSignupRequest($registerData)
    {

    $error = array();
    if (!$this->checkIfKeysHaveValuesInRequest($registerData,
    array('name', 'email', 'password', 'repassword' , 'site'))
    ) {

    $error[] = "Please fill all fields";
    }

    if (!$this->validateStringAcceptArabic($registerData->name)) {

    $error[] = "Name can\'t be arabic";
    }


//    if (!$this->validateNameString($registerData->username)) {
//
//    $error[] = "Name is incorrect";
//    }


    if (!$this->validateEmail($registerData->email)) {

    $error[] = "Please fill a valid email";
    }

    if (strlen($registerData->password) < 8) {

    $error[] = "Password must be more than 8 characters";
    }


    if ($this->validateEmilIsUnique($registerData->email)) {
    $error[] = $registerData->email. "is already a member, if this is yours please go to login page";
    }
    if (count($error) >= 1) {
    return $error;
    }
    return 0;
    }





     /**
      * to can register
      * @param $registerData is array of Data needed in register
      * @return array of error or array of data of new user
      */
     public function signup($registerData)
     {

         $registerData->email_code = str_random(60);

         $error = $this->validateSignupRequest($registerData);

         if ($error) {
             return array('error' => '1', 'data' => $error);

         }
         $user = $this->saveNewUser($registerData);


         return array('error' => '0', 'data' => $user);

     }

    /** if  email is not Unique
     * @param $username
     * @param $email
     * @return mixed
     */
    private function validateEmilIsUnique($email)
    {
        return User::where('email', $email)->count();
    }



    /**
     * Used to check if the sting without spacial char and length of string  0
     * @param $string
     * @param int $minLength
     * @param int $maxLength
     * @return int
     */
    public function validateNameString($string, $minLength = 5, $maxLength = 30)
    {
        return preg_match("/^[a-zA-Z\-]{" . $minLength . "," . $maxLength . "}$/", $string);
    }






    /**
     * to save data in db
     * @param $registerData
     * @return Members
     */
    private function saveNewUser($registerData)
    {

        //$code = str_random(60);
        $user = new User();
        $user->name = strtolower($registerData->name);
        $user->email = $registerData->email;
        $user->password = Hash::make($registerData->password);
        $user->email_code = $registerData->email_code;
//        $user->email_code;

        $user->save();
        return $user;
    }

}