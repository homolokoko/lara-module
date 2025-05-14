<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFusingMachineValueGivenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fusing_machine_value_given', function (Blueprint $table) {
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
        Schema::dropIfExists('fusing_machine_value_given');
    }
}
