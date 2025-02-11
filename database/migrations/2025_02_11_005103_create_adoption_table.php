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
        Schema::create('adoption', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')->references('id')->on('pet')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('adopter_id');
            $table->foreign('adopter_id')->references('id')->on('user')->onDelete('cascade')->onUpdate('cascade');

            $table->enum('status', ['Concluido', 'Cancelado', 'Em Processo']);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoption');
    }
};
