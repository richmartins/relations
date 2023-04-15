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
        Schema::create('item_references', function (Blueprint $table) {
            $table->foreignId('item_id')->constrained('items')->onDelete('cascade');
            $table->foreignId('referenced_item_id')->constrained('items')->onDelete('cascade');

            $table->primary(['item_id', 'referenced_item_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('references');
    }
};
