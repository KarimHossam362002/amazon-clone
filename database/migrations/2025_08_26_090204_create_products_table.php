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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('discount')->default(0);
            $table->integer('price_after_discount')->default(0);
            $table->integer('stock_quantity');
            // $table->unsignedBigInteger('category_id');
            $table->string('brand', 100);
            $table->decimal('rating_avg', 2, 1)->nullable();
            $table->string('image');
            $table->foreignId('category_id')->nullable()->constrained('categories')
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
        Schema::dropIfExists('products');
    }
};
