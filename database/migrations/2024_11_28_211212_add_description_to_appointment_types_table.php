<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('appointment_types', function (Blueprint $table) {
            $table->string('description')->nullable();
        });

        // Update existing records with descriptions
        DB::table('appointment_types')
            ->where('appointment_type', 'Solo Appointment')
            ->update(['description' => 'Book an appointment for thyself']);

        DB::table('appointment_types')
            ->where('appointment_type', 'Multiple People Appointment')
            ->update(['description' => 'Book an appointment for thy group']);

        DB::table('appointment_types')
            ->where('appointment_type', 'Bulk Appointment')
            ->update(['description' => 'Book an appointment for a huge amount of people']);
    }

    public function down(): void
    {
        Schema::table('appointment_types', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
};
