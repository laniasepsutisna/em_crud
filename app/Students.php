<?php
/**
 * Created by PhpStorm.
 * User: Asus N43S
 * Date: 8/24/2017
 * Time: 8:31 PM
 */

namespace App;


class Students
{

     protected $table = 'em_students';
	protected $fillable = array('id_student', 'name_student', 'birthday_student', 'address_student', 'country_student', 'image__student', 'datejoin_student', 'level__student', 'course__student', 'create_student', 'modify_student', 'em_students');


}