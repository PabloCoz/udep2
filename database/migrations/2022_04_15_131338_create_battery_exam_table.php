<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('battery_exam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('battery_id')->nullable();
            $table->unsignedBigInteger('exam_id')->nullable();
            $table->foreign('battery_id')->references('id')->on('batteries');
            $table->foreign('exam_id')->references('id')->on('exams');
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
        Schema::dropIfExists('battery_exam');
    }
};
