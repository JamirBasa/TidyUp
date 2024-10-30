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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_num');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->boolean('is_customer')->default(true); // Default to true if the user is a customer
            $table->boolean('is_seller')->default(false);  // Default to false if the user is not a seller
            $table->rememberToken();
            $table->timestamps();
        });
        
        Schema::create('addresses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID for each address
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key referencing the users table
            $table->string('region');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->string('detailed_address');
            $table->timestamps(); // Created at and Updated at timestamps
        });
        
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name')->unique(); // e.g., 'Staff', 'Shop Owner', 'Branch Manager'
            $table->timestamps();
        });

        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Link to user
            $table->foreignId('role_id')->constrained()->onDelete('cascade'); // Link to role
            $table->timestamps();
        });
          
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
