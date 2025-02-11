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
        Schema::create('pet', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('age');
            $table->enum('size', ['Grande', 'Médio', 'Pequeno']);
            $table->string('breed');
            $table->enum('sex', ['Male', 'Female']);
            $table->decimal('weight', 8, 2);
            $table->boolean('vaccinated');
            $table->boolean('castred');
            $table->boolean('adopted');

            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('user')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('location')->onDelete('cascade')->onUpdate('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet');
    }
};
