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
        Schema::create('shops', function (Blueprint $table) {
            $table->id(); // Unique identifier for the shop
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Link to the user who owns the shop
            $table->string('shop_name'); // Name of the shop
            $table->string('address'); // Address of the shop
            $table->string('contact_number')->nullable(); // Optional contact number for the shop
            $table->string('email')->nullable(); // Optional email for the shop
            $table->text('description')->nullable(); // Optional description of the shop
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the shop
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
