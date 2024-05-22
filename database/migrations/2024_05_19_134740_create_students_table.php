<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('gender_id')->constrained();
            $table->foreignId('mother_occupation_id')->constrained();
            $table->foreignId('father_occupation_id')->constrained();
            $table->foreignId('mother_qualification_id')->constrained();
            $table->foreignId('father_qualification_id')->constrained();
            $table->decimal('monthly_income', 8, 2);
            $table->string('discount',5);
            $table->string('age_when_enrolled');
            $table->string('child_number_in_family');
            $table->string('any_other_income');
            $table->string('admission_fee');
            $table->boolean('Student_Status');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}