<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('order_id')->unique()->nullable();
            $table->enum('payment_method', ['Credit Card', 'PayPal', 'Bank Transfer', 'Cash']);
            $table->decimal('amount', 10, 2);
            $table->dateTime('payment_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('payment_status', ['Pending', 'Completed', 'Failed'])->default('Pending');
            $table->foreignId('order_id')->nullable()->constrained('orders')
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
        Schema::dropIfExists('payments');
    }
};
