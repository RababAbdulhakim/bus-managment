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
        Schema::create('route_cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city')
                ->references('id')
                ->on('cities')->onDelete('cascade');
            $table->timestamp('from');
            $table->timestamp('to');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
