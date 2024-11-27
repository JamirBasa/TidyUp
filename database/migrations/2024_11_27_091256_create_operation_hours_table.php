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
        Schema::create('operation_hours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained('shop_branch')->onDelete('cascade');
            $table->enum('day', ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']);
            $table->boolean('is_open')->default(false);
            $table->time('opening_time')->nullable();
            $table->time('closing_time')->nullable();
            $table->timestamps();
            $table->index(['branch_id', 'day']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operating_hours');
    }
};
