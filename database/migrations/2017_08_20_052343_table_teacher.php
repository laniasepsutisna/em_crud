<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTeacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->string('id');
            $table->string('t_name');
            $table->date('t_birthday');
            $table->string('t_course');
            $table->string('t_schedule_day');
            $table->string('t_schedule_time');
            $table->string('t_address');
            $table->string('t_country');
            $table->string('t_image');
            $table->date('t_datejoin');
            $table->string('t_skill');
            $table->string('t_cv');
            $table->string('t_create');
            $table->string('t_modify');

            

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop("teacher");
    }
}
