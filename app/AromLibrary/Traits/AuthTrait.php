<?php

namespace App\AromLibrary\Traits;


trait AuthTrait
{

    /**
     * Used to check if the specific keys have values (not null) in request or not
     * @param $request
     * @param array $dataToCheck
     * @return bool
     */
    public function checkIfKeysHaveValuesInRequest($request, $dataToCheck = [])
    {
        $array = is_array($request) ? $request : $request->toArray();
        if ($array && count($dataToCheck)) {
            for ($i = 0, $len = count($dataToCheck); $i < $len; $i++) {
                if (!isset($array[$dataToCheck[$i]]) || $array[$dataToCheck[$i]] == '') {
//                    return $dataToCheck[$i];
                    return false;
                }
            }
        }
        return true;
    }




    /**
     * Used to check if the sting without spacial char Accept Arabic lang and length of string 0
     * @param $string
     * @param int $minLength
     * @param int $maxLength
     * @return int
     */
    public function validateStringAcceptArabic($string, $minLength = 3, $maxLength = 30)
    {
        return preg_match("/^[a-zA-Zأ-ى'.\s]{" . $minLength . "," . $maxLength . "}$/", $string);
    }




    /**
     * Used to check is the email valid or not
     * @param $email
     * @return bool
     */
    public function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }




    /**
     * return false if the key not in array
     * @param $key
     * @param array $array
     * @return bool
     */
    public function checkIfKeyNotInArray($key, Array $array)
    {
        return (in_array($key, $array)) ? true : false;
    }



}