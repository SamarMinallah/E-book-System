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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained() ->onDelete('cascade');
              $table->string("user_name");
            $table->UnSignedBigInteger("book_id");
            $table->string("book_name");
            $table->string("format");
            $table->UnSignedBigInteger("quantity");
            $table->string("unit_price");
            $table->string("total_amount");
            $table->string("payment_method");
            $table->string('card_number', 255)->nullable();
            $table->string("card_name")->nullable();
            $table->string('expiry_date', 7)->nullable();
            $table->string('cvv', 4)->nullable();
            $table->enum('status', ['confirmed','cancelled','delivered' ])->default('confirmed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
