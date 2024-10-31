<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shop_category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        // Insert default values
        DB::table('shop_category')->insert([
            ['name' => 'Barbershop'],
            ['name' => 'Beauty Salon'],
            ['name' => 'Hair Salon'],
            ['name' => 'Nail Salon'],
        ]);

        Schema::create('shops', function (Blueprint $table) {
            $table->id(); // Unique identifier for the shop
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Link to the user who owns the shop
            $table->string('shop_name'); // Name of the shop
            $table->string('contact_number')->nullable(); // Optional contact number for the shop
            $table->string('email')->nullable(); // Optional email for the shop
            $table->text('description')->nullable(); // Optional description of the shop
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the shop
            $table->timestamps(); // Created and updated timestamps
        });

        Schema::create('shop_shop_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->constrained('shops')->onDelete('cascade'); // Link to the shop
            $table->foreignId('shop_category_id')->constrained('shop_category')->onDelete('cascade'); // Link to the shop category
            $table->timestamps();
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
