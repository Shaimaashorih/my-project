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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_name');
            // $table->foreignId('dept_id')->references('id')->on('departments')->nullable;
            $table->string('emp_address');
            $table->string('emp_email');
            $table->string('emp_phone');
            $table->date('emp_bd');
            $table->string('emp_gender');
            $table->date('hiredate');
            $table->time('emp_in');
            $table->time('emp_out');
            $table->float('salary');
            $table->string('nationalid');
            $table->string('nationality');
            
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
        Schema::dropIfExists('employees');
    }
};
