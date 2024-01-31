<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('Kd_skema');
            $table->string('Nm_peserta');
            $table->string('Jekel');
            $table->string('Alamat');
            $table->string('No_hp');
            $table->timestamps();

            $table->foreign('Kd_skema')->references('Kd_skema')->on('skema')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta');
    }
};
