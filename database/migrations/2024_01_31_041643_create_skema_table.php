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
        Schema::create('skema', function (Blueprint $table) {
            $table->id();
            $table->string('Kd_skema')->unique();
            $table->string('Nm_skema');
            $table->string('Jenis');
            $table->integer('Jml_unit');
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
        Schema::dropIfExists('skema');
    }
};
