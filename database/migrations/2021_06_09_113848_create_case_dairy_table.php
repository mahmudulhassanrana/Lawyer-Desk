<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseDairyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_dairy', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('casetype');
            $table->string('vname');
            $table->string('vemail');
            $table->string('vaddress');
            $table->string('vnid');
            $table->string('vphone');
            $table->string('case_details');
            $table->string('date');
            $table->string('vcomment');
            $table->string('file_1')->nullable();
            $table->string('file_2')->nullable();
            $table->string('file_3')->nullable();
            $table->string('user_id')->nullable();
            $table->string('lawyer_id')->nullable();
            $table->string('naxt_date')->nullable();
            $table->string('feedback')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('case_dairy');
    }
}
