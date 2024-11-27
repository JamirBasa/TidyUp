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
        if (!Schema::hasTable('branch_appointment_types')) {
            Schema::create('branch_appointment_types', function (Blueprint $table) {
                $table->id();
                $table->foreignId('branch_id')->constrained('shop_branch')->onDelete('cascade')->onUpdate('cascade');
                $table->foreignId('appointment_type_id')->constrained('appointment_types')->onDelete('cascade')->onUpdate('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_appointment_types');
    }
};
