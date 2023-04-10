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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('extra');
            $table->integer('discount');
            $table->string('weekend1')->nullable();
            $table->string('weekend2')->nullable();
            $table->string('weekend3')->nullable();
            $table->string('weekend4')->nullable();
            $table->string('weekend5')->nullable();
            $table->string('weekend6')->nullable();
            $table->string('weekend7')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
};
