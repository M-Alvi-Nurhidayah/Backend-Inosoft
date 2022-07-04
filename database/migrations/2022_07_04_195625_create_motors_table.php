<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('vehicle_id');
            $table->string('name');
            $table->string('nametype');
            $table->string('machine');
            $table->string('suspension');
            $table->string('transmission');
            $table->timestamps();

            $table->foreign('vehicle_id')
                    ->references('id')
                    ->on('motors')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motors');
    }
};
