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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id')->nullable();
            // $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('rating')->checkBetween(1, 5);
            $table->text('comment')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('product_id')->nullable()->constrained('products')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
