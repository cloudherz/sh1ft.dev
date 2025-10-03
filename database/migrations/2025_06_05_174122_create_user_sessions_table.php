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
        Schema::create('user_sessions', function (Blueprint $table) {
            $table->id('session_id')->unique();
            $table->string('user_type', 64)->nullable();
            $table->string('user_login', 64)->nullable();
            $table->string('session_token', 1024)->nullable();
            $table->string('session_data_ip', 1024)->nullable();
            $table->json('session_data_location')->nullable();
            $table->json('session_data_device')->nullable();
            $table->string('started', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_sessions');
    }
};
