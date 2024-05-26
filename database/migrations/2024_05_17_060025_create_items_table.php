<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('ItemID');
            $table->unsignedBigInteger('TypeID');
            $table->string('Name');
            $table->timestamp('Updated time')->nullable();
            $table->timestamp('Created time')->useCurrent();
            $table->boolean('Borrowed')->default(false);
            $table->unsignedBigInteger('borrower')->nullable();
            $table->timestamp('Return time')->nullable();
            $table->boolean('Late')->default(false);
    
            $table->foreign('TypeID')->references('TypeID')->on('types');
            $table->foreign('borrower')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
