<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFusingMachineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fusing_machine', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('locate_id');
            $table->integer('style_id');
            $table->integer('buyer_id');
            $table->integer('serial_number_id');
            $table->boolean('status');
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('fusing_machine');
    }
}
