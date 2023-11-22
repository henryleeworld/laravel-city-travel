<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->unsignedBigInteger('city_from_id');
            $table->foreign('city_from_id')->references('id')->on('cities');
            $table->unsignedBigInteger('city_to_id');
            $table->foreign('city_to_id')->references('id')->on('cities');
        });
    }
};
