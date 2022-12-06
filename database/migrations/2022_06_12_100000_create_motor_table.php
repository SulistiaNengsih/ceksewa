<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('motor')) {
            Schema::create('motor', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->string('tipe');
                $table->string('cc_mesin');
                $table->double('biaya_sewa');
                $table->double('biaya_denda');
            });
        }  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motor');
    }
}