<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');

            // $table->unsignedBigInteger('cart_id')->nullable();
            // $table->unsignedBigInteger('product_id')->nullable();
            $table->foreignId('cart_id')->nullable()->constrained('carts')
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
        Schema::dropIfExists('cart_items');
    }
};
