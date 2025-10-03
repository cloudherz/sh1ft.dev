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
        Schema::create('staff', function (Blueprint $table) {
            $table->id('staff_id')->unique();
            $table->string('login', 64)->unique();
            $table->string('email', 128)->unique();
            $table->string('email_verified', 8)->nullable();;
            $table->string('password', 1024);
            $table->string('name', 128)->nullable();
            $table->text('image')->nullable();
            $table->string('registered', 32)->nullable();
            $table->string('updated', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
