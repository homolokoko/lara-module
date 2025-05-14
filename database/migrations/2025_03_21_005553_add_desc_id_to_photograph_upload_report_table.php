<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescIdToPhotographUploadReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photograph_upload_report', function (Blueprint $table) {
            //
            $table->integer('desc_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photograph_upload_report', function (Blueprint $table) {
            //
            $table->dropColumn('desc_id');
        });
    }
}
