<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('em_students', function (Blueprint $table) {
            $table->string('id_student');
            $table->string('name_student');
            $table->date('birthday_student');
            $table->string('address_student');
            $table->string('country_student');
            $table->string('image__student');
            $table->date('datejoin_student');
            $table->string('level__student');
            $table->string('course__student');
            $table->date('create_student');
            $table->date('modify_student');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop("em_students");
    }
}
