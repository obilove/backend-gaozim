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
        Schema::create('orders', function (Blueprint $table) {

            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('vendor_id')->nullable()->constrained('vendors');
            $table->foreignId('carrier_id')->nullable() ->constrained('carriers');
            $table->foreignId('warehouse_id')->nullable()->constrained('warehouses');

            $table->string('sender');
            $table->text('sender_address');
            $table->string('sender_phone');
            $table->string('sender_email');
            $table->string('receiver');
            $table->text('receiver_address');
            $table->string('receiver_phone');
            $table->string('receiver_email');

            $table->enum('delivery_type', [
                'send',
                'receive'
            ])->default('send');
            $table->string('tracker')->unique();
            $table->text('item');
            $table->boolean('fragile')->default(false);
            $table->string('image')->nullable();
            $table->string('item_size')->nullable();
            $table->string('pickup_request_id')->nullable();
            $table->string('duration')->nullable();
            $table->date('expected_delivery_date')->nullable();
            $table->enum('status', [
                'pending',
                'pickup_requested',
                'assigned',
                'picked_up',
                'at_collection',
                'batched',
                'in_transit',
                'delivered',
                'cancelled'
            ])->default('pending');

            $table->string('slat')->nullable();
            $table->string('slog')->nullable();
            $table->string('rlat')->nullable();
            $table->string('rlog')->nullable();
            $table->json('route')->nullable();
            $table->json('process')->nullable();

            $table->enum('payment_type', [
                'wallet',
                'card',
                'cash'
            ])->nullable();

            $table->decimal('worth', 10, 2)->default(0.00);
            $table->decimal('amount', 10, 2)->default(0.00);
            $table->decimal('carrier_amount', 10, 2)->default(0.00);
            $table->decimal('vat', 10, 2)->default(0.00);
            $table->decimal('commission', 10, 2)->default(0.00);
            $table->decimal('total_amount', 10, 2)->default(0.00);


            $table->timestamps();
            $table->softDeletes();
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