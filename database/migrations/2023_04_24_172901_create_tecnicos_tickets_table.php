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
        Schema::create('tecnicos_tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tecnicos_id');
            $table->unsignedBigInteger('tickets_id');

            $table->foreign('tecnicos_id')->references('id')->on('tecnicos');
            $table->foreign('tickets_id')->references('id')->on('tickets');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnicos_tickets');
    }
};
