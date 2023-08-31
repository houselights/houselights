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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hub_id')->nullable();
            $table->string('name');
            $table->text('description');
            $table->string('timezone');
            $table->string('event_type');
            $table->string('access_level');
            $table->string('meeting_type');
            $table->string('status');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->string('contact_name');
            $table->timestamp('lobby_start_time');
            $table->timestamp('lobby_end_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
