<?php

/***
 * Local Timezone set
 */


date_default_timezone_set('Asia/Dhaka');

/***
 * Marriage Age Calculator
 */

function marriageAgeCal($name, $birth_year, $gender){

    $age = date('Y') - $birth_year;
    $marriage_age ='';

    switch ($gender) {
        case 'Male':
            $marriage_age ='21';
            break;

        case 'Female':
            $marriage_age ='18';
            break;   

        default:
            $marriage_age ='21';
            break;
    }

if ($age >= $marriage_age ){
    return " <p class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> Hi {$name}, You are now ready for marriage. <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> </p>";
}else{
    $wait = $marriage_age - $age;
    return " <p class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"> Hi {$name}, We are sorry, You are {$age} years old, You have to wait {$wait} years for your marrige. <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> </p>"; 
}


}





?>