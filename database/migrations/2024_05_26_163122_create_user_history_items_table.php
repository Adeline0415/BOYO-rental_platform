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
        Schema::create('user_history_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('物品名稱');
            $table->string('編號');
            $table->string('租借日期');
            $table->string('歸還日期');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_history_items');
    }
};
