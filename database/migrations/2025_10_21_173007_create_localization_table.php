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
        Schema::create('localization', function (Blueprint $table) {
            $table->string('key_id')->unique();
            $table->text('en')->nullable();
            $table->text('ru')->nullable();
            $table->text('bg')->nullable();
            $table->text('jp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localization');
    }
};
