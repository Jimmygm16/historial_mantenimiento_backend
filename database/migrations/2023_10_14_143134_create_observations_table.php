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
        Schema::create('observations', function (Blueprint $table) {
            $table->id();
            $table->string('message', 300);
            $table->foreignid('user')->nullable();
            $table->foreignid('computer')->nullable();
            $table->foreignid('category')->nullable();
            $table->timestamps();
            //references to foreign keys
            $table->foreign('user')->references('id')->on('users')
            ->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('computer')->references('id')->on('computers')
            ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('category')->references('id')->on('categories')
            ->nullOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Observation');
    }
};
