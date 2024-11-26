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
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('userType')->default('CST'); //ADM(for Admin), CST(for Customer), MD(for moderator)
        //     $table->string('first_name');
        //     $table->string('last_name');
        //     $table->string('username')->unique();
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->string('phone_num');
        //     $table->enum('gender', ['Male', 'Female', 'Other']);
        //     $table->boolean('is_customer')->default(true); // Default to true if the user is a customer
        //     $table->boolean('is_service_provider')->default(false); 
        //     $table->boolean('is_admin')->default(false); // Default to false if the user is not a seller
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('username', 50)->unique(); // Unique username
            $table->string('email', 100)->unique(); // Unique email
            $table->string('password'); // Encrypted password
            $table->string('first_name', 50)->nullable(); // User's first name
            $table->string('last_name', 50)->nullable(); // User's last name
            $table->enum('gender', ['Male', 'Female', 'Other'])->default('Other'); // Gender with default value
            $table->string('contact_number', 20)->nullable(); // Contact number
            $table->string('region', 100)->nullable(); // Region
            $table->string('province', 100)->nullable(); // Province
            $table->string('city', 100)->nullable(); // City
            $table->string('barangay', 100)->nullable(); // Barangay
            $table->text('detailed_address')->nullable(); // Detailed address
            $table->string('profile_photo_path', 255)->nullable(); // Profile photo path
            $table->timestamps(); // created_at and updated_at

            // Optional: Add indexes or additional constraints if needed
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
