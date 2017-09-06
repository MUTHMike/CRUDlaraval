<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sta_title','255');            
            $table->string('sta_description','255')->nullable();
            $table->string('status','20')->default('1');
            $table->string('sta_author','255');
            $table->string('sta_sort','255')->default('1');
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
        Schema::dropIfExists('tbl_statuses');
    }
}
