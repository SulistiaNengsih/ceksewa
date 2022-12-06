<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBuilderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('builder')) {
            Schema::create('builder', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
            });

            DB::table('builder')->insert([
                [
                    'nama' => "BuilderMotorManual"
                ],
                [
                    'nama' => "BuilderMotorMatic"    
                ]
            ]);
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('builder');
    }
}