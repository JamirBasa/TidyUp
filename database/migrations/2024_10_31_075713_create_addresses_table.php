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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID for each address
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade'); // Foreign key referencing the users table
            $table->foreignId('shop_id')->nullable()->constrained('shops')->onDelete('cascade'); // Foreign key referencing the shops table
            $table->string('region');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->string('detailed_address');
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
