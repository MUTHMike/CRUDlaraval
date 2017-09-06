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
            $table->increments('id');
            $table->string('use_firstname','255');            
            $table->string('use_lastanme','255');
            $table->string('use_email')->unique();
            $table->string('use_password','255');
            $table->string('use_gender','255');
            $table->string('use_dob','255')->nullable();           
            $table->string('use_phone','255')->nullable();
            $table->string('use_address','255')->nullable();
            $table->string('use_thumnial','255')->nullable();
            $table->string('use_status_id_for','255');      
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
