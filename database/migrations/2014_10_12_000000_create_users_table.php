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
            $table->bigIncrements('id');
            $table->enum('username', ['admin', 'teacher', 'student'])->default('student');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('password');
            $table->string('postcode');
            $table->string('birthday');
            $table->string('schoolName');
            $table->string('state');
            $table->string('phone');
            $table->string('photograph');
            $table->string('img');
            $table->string('is_left');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
