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
        Schema::create('studentinfo', function (Blueprint $table) {
            $table->id('sno');
            $table->string('idNo', 8);
            $table->string('firstname', 20);
            $table->string('middlename', 15)->nullable();
            $table->string('lastname', 15);
            $table->string('suffix', 5)->nullable();
            $table->string('course', 15);
            $table->smallInteger('year');
            $table->date('birthDate');
            $table->string('gender', 6);
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
        Schema::dropIfExists('studentinfo');
    }
};
