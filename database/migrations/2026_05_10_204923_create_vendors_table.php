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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamp('email_verified_at') ->nullable();
            $table->string('password');
            $table->string('code')->nullable();
            $table->string('status')->default('active');
            $table->string('user_type')->default('consumer');
            $table->string('account_type')->default('Personal');
            $table->string('business')->nullable();
            $table->string('delivery_capacity')->nullable();
            $table->string('ave_size', 225)->nullable();
            $table->string('item_cat', 225)->nullable();
            $table->string('biz_cat', 225)->nullable();
            $table->string('image')->nullable();
            $table->string('username')->nullable();
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('badge')->nullable();
            $table->string('coin')->nullable();
            $table->string('dispatch_count') ->default('0');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
