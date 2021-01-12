<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name', 20);
            $table->string('avatar', 200)->nullable();
            $table->tinyInteger('status')->default(STATUS_CLASS["ACTIVE"]);
            $table->foreignId('userId')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('subjectId')->constrained('subjects')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('classes');
    }
}
