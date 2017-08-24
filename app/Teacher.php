<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model {

	protected $table = 'teacher';
	protected $fillable = array('id', 't_name', 't_birthday', 't_course', 't_schedule_day', 't_schedule_time', 't_address', 't_country', 't_image', 't_datejoin', 't_skill', 't_cv', 't_create', 't_modify');
	

}
