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
        Schema::create('balances', function (Blueprint $table) {
            $table->id('bNo');
            $table->unsignedBigInteger('sNo');
            $table->decimal('amountDue', $precision = 8, $scale = 2);
            $table->decimal('totalBalance', $precision = 8, $scale = 2);
            $table->text('notes');
            $table->timestamps();
            $table->foreign('sNo')->references('sNo')->on('studentinfo');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balances');
    }
};
