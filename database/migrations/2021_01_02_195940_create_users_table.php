<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('fullName', 50);
            $table->integer('birthday');
            $table->string('email', 50)->unique();
            $table->string('phoneNumber', 50)->unique()->nullable();
            $table->string('job', 100)->nullable();
            $table->string('avatar', 200)->nullable();
            $table->string('facebook', 200)->unique()->nullable();
            $table->string('gender',10)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('role', 11);
            $table->tinyInteger('status')->default(4);
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
        Schema::dropIfExists('users');
    }
}
