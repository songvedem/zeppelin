<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumToDetectionThresholdsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detection_thresholds', function (Blueprint $table) {
            $table->string("path");
            $table->integer("path_frequency");
            $table->integer("host_frequency");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detection_thresholds', function (Blueprint $table) {
            $table->dropColumn("path");
            $table->dropColumn("path_frequency");
            $table->dropColumn("host_frequency");
        });
    }
}
