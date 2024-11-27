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
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->timestamps();
        });

        //insert into category_name
        DB::table('service_categories')->insert([
            ['category_name' => 'Haircut'], // 1
            ['category_name' => 'Hairstyle'], // 2
            ['category_name' => 'Manicure'], // 3
            ['category_name' => 'Pedicure'], // 4
            ['category_name' => 'Grooming'], // 5
            ['category_name' => 'Sports & Outdoors'], // 6
            ['category_name' => 'Others'], // 7 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_categories');
    }
};
