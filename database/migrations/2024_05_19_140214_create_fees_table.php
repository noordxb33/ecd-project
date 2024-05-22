<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTable extends Migration
{
   
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 8, 2);
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('month_id');
            $table->foreign('month_id')->references('id')->on('months')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();

        });
    }
    public function down()
    {
        Schema::dropIfExists('fees');
    }
};
