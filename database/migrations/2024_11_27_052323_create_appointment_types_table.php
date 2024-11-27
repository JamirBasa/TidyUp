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
        Schema::create('appointment_types', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_type');
            $table->timestamps();
        });

        DB::table('appointment_types')->insert([
            ['appointment_type' => 'Solo Appointment'],
            ['appointment_type' => 'Multiple People Appointment'],
            ['appointment_type' => 'Bulk Appointment']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_types');
    }
};
