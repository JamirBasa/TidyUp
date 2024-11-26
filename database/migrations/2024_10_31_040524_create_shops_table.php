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
        Schema::create('branch_category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        // Insert default values
        DB::table('branch_category')->insert([
            ['name' => 'Barbershop'],
            ['name' => 'Beauty Salon'],
            ['name' => 'Hair Salon'],
            ['name' => 'Nail Salon'],
        ]);

        Schema::create('shops', function (Blueprint $table) {
            $table->id(); // Unique identifier for the shop
            $table->string('shop_name'); // Name of the shop
            $table->timestamps(); // Created and updated timestamps
        });
        Schema::create('shop_account', function (Blueprint $table) {
            $table->id(); // Unique identifier for the shop
            $table->foreignId('shop_owner_id')->constrained('users')->onDelete('cascade'); // Link to the user who owns the shop
            $table->foreignId('shop_id')->constrained('shops')->onDelete('cascade'); // Link to the shop
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
        Schema::dropIfExists('shop_account');
        Schema::dropIfExists('branch_category');
    }
};
