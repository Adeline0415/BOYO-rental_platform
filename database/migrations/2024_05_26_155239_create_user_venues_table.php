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
        Schema::create('user_venues', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('場地名稱');
            $table->string('預定日期');
            $table->string('預定時段');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_venues');
    }
};
