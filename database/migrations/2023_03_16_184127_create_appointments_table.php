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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('firstName',50);
            $table->string('lastName',50);
            $table->string('serviceId',100);
            $table->string('serviceTitle',100);
            $table->string('email',100);
            $table->string('Number',100);
            $table->string('gender',100);
            $table->string('city',100);
            $table->string('country',100);
            $table->string('zip',100);
            $table->string('day',100);
            $table->string('time',100);
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
        Schema::dropIfExists('appointments');
    }
};
