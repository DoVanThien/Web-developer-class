<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_rqs', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->tinyInteger('frequency');
            $table->smallInteger('durationTime');
            $table->tinyInteger('wishJob');
            $table->tinyInteger('completeExercise');
            $table->tinyInteger('outCondition');
            $table->string('nowSkill', 500)->nullable();
            $table->string('mission', 500)->nullable();
            $table->foreignId('userId')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('classId')->constrained('classes')->onUpdate('cascade')->onDelete('cascade');
            $table->tinyInteger('status')->default(3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_rqs');
    }
}
