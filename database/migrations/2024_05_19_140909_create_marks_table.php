<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('subject_id')->constrained();
            $table->decimal('midterm_marks', 5, 2);
            $table->decimal('final_marks', 5, 2);
            $table->string('Grade',);
            $table->timestamps();
            $table->softDeletes();

        });

    }

    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
