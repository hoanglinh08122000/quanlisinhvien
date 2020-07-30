<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubjectTeacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('subject_teacher', function (Blueprint $table) {
            
            $table->integer('teacher_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->primary([ 'teacher_id', 'subject_id' ]);
            $table->foreign('teacher_id')->references('id')->on('teacher');
            $table->foreign('subject_id')->references('id')->on('subject');
            $table->integer('status');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
