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
        Schema::create('devices', function (Blueprint $table) {
            $table->id('manage_id');
            $table->foreignId('soft_id');
            $table->foreignId('loca_id');
            $table->string('dev_type');
            $table->string('CPU');
            $table->integer('RAM');
            $table->integer('HDD');
            // 他のカラムも同様に追加
    
            $table->foreign('soft_id')->references('soft_id')->on('softwares');
            $table->foreign('loca_id')->references('loca_id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
