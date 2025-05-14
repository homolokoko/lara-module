<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeatSealMachineValueActualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heat_seal_machine_value_actual', function (Blueprint $table) {
            $table->id();
            $table->integer('root_id');
            $table->double('time')->nullable();
            $table->double('pressure')->nullable();
            $table->double('temperature')->nullable();
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
        Schema::dropIfExists('heat_seal_machine_value_actual');
    }
}
