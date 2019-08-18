<?php


if (! function_exists('getAge')) {
    function getAge($birthdate)
    {

        $years = \Carbon\Carbon::parse($birthdate)->age;

        return $years;
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