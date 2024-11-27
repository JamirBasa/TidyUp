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
        Schema::create('shop_gallery', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')
                ->constrained('shop_branch')
                ->onDelete('cascade');
            $table->string('filename');  // Original filename
            $table->string('path');      // Full path in storage
            $table->string('url');       // Public URL to access the image
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_gallery');
    }
};
