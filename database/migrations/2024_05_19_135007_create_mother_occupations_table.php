<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotherOccupationsTable extends Migration
{
    public function up()
    {
        Schema::create('mother_occupations', function (Blueprint $table) {
            $table->id();
            $table->string('MotherOccupation');
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('mother_occupations');
    }
}