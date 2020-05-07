<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('StudentID',10)->nullable();
            $table->string('email')->unique();
            $table->string('nickname')->nullable();
            $table->string('IdCardNumber',15)->nullable();
            $table->string('BirthDay')->nullable();
            $table->string('Faculty')->nullable();
            $table->string('Subject')->nullable();
            $table->string('AcademicYear')->nullable();
            $table->string('Degrees')->nullable();
            $table->string('Tel',10)->nullable();
            $table->string('Facebook')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_image')->nullable(); // our profile image field
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('type')->default(0);
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
