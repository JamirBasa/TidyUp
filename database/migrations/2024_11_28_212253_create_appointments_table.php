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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('shop_id')->constrained('shops')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('branch_id')->constrained('shop_branch')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('appointment_type_id')->constrained('appointment_types')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('appointment_date');
            $table->string('status')->enum = ['pending', 'approved', 'rejected', 'completed'];
            $table->decimal('total_price', 10, 2);
            $table->text('note')->nullable();
            $table->integer('reschedule_count')->default(0);
            $table->integer('reschedule_from');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
