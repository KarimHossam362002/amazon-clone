<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id')->nullable();
            $table->dateTime('order_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('shipping_address')->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->enum('payment_status', ['Pending', 'Completed', 'Failed', 'Refunded'])->default('Pending');
            $table->enum('shipping_status', ['Pending', 'Shipped', 'Delivered', 'Returned'])->default('Pending');
            $table->foreignId('user_id')->nullable()->constrained('users')
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
        Schema::dropIfExists('orders');
    }
};
