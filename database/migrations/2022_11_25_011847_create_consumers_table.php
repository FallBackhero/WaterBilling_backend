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
        Schema::create('consumers', function (Blueprint $table) {
            $table->id('consumer_id');
            $table->string('user_key');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('gender');
            $table->dateTime('birthdate');
            $table->integer('phone_number');
            $table->string('civil_status');
            $table->string('name_of_spouse');
            $table->string('barangay');
            $table->string('purok');
            $table->integer('household_no');
            $table->integer('first_reading');
            $table->string('consumer_type');
            $table->integer('serial_no');
            $table->string('brand');
            $table->string('status');
            $table->dateTime('registered_at', $precision = 0);
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
        Schema::dropIfExists('consumers');
    }
};
