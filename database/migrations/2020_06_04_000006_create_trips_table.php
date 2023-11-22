<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->date('date_from');
            $table->date('date_to');
            $table->integer('adults');
            $table->integer('children')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
