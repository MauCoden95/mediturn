<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->integer('dni');
            $table->string('address');
            $table->date('birth_date')->default('0000-00-00');
            $table->integer('phone1');
            $table->integer('phone2');
            $table->integer('phone3');
            $table->string('health_insurance');
            $table->integer('numbre_health_insurance');
            $table->string('history');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacients');
    }
};
