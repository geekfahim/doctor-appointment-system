<?php




if (!function_exists('getGenders')) {
    function getGenders()
    {
        return ['Male', "Female", "Others"];
    }
}

if(!function_exists('getSpecialistDepartment')){
     function getSpecialistDepartment()
     {

        return ['Cardiologist','Orthopedicts','Dermatologists','Ophthalmologists','Gynecologists','Gastroenterologists','Endocrinologists'];

    }
}





?>
