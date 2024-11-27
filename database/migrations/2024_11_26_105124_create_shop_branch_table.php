<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopBranchTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('shop_branch', function (Blueprint $table) {
            $table->id(); // Unique identifier for each branch

            $table->unsignedBigInteger('shop_id'); // Foreign key referencing shop table
            $table->string('branch_name', 100); // Name of the branch
            $table->string('email');
            $table->string('contact_number', 15)->nullable(); // Contact number of the branch
            $table->string('region', 100); // Region of the branch
            $table->string('province', 100); // Province of the branch
            $table->string('city', 100); // City of the branch
            $table->string('barangay', 100)->nullable(); // Barangay of the branch
            $table->text('detailed_address')->nullable(); // Detailed address of the branch
            $table->enum('availability', ['Available', 'Unavailable'])->default('Available'); // Availability status
            $table->boolean('is_verified')->default(false); // Verification status
            $table->timestamps(); // created_at and updated_at columns

            // Foreign key constraint
            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('branch_branch_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained('shop_branch')->onDelete('cascade'); // Link to the shop
            $table->foreignId('branch_category_id')->constrained('branch_category')->onDelete('cascade'); // Link to the shop category
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('shop_branch');
        Schema::dropIfExists('branch_branch_category');
    }
}
