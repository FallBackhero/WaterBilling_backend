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
        Schema::create('readings', function (Blueprint $table) {
            $table->id('reading_id');
            $table->string('reader_id');
            $table->string('consumer_id');
            $table->integer('reading');
            $table->dateTime('reading_date');
            $table->integer('bill');
            $table->dateTime('date_paid');
            $table->dateTime('due_date');
            $table->string('service_period');
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
        Schema::dropIfExists('readings');
    }
};
