<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->char('nisn' , 10)->unique();
            $table->char('nis' , 8);
            $table->string('name' , 35);
            $table->foreignId('class_id')->constrained('kelas')->cascadeOnDelete();
            $table->text('address');
            $table->foreignId('spp_id')->constrained('spps')->cascadeOnDelete()->nullable();
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
        Schema::dropIfExists('students');
    }
}
