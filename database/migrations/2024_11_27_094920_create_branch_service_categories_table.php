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
        Schema::create('branch_service_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained('shop_branch');
            $table->foreignId('service_category_id')->constrained('service_categories');
            $table->string('service_name');
            $table->decimal('cost', 8, 2);
            $table->string('duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalog_services');
        Schema::dropIfExists('branch_service_categories');
    }
};
