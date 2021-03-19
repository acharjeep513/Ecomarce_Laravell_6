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
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('User_name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('street_address')->unique();
            $table->unsignedInteger('division_ID')->comment('division table id')->unique();
            $table->unsignedInteger('district_ID')->comment('district table id')->unique();
            $table->unsignedTinyInteger('status')->default(0)->comment('0=Inactive | 1=active |2=ban');
            $table->string('password');
            $table->string('ip_address')->nullable();
            $table->string('avater')->nullable();
            $table->text('shoping_address')->nullable();
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
