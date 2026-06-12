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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained() ->onDelete('cascade');
            $table->string("user_name");
            $table->string("user_email");
            $table->string("plan_name");
            $table->string("plan_duration");
            $table->Decimal("plan_amount");
            $table->timestamp('start_date');
            $table->date("end_date");
            $table->string("Name_On_Card");
            $table->string('card_number', 255)->nullable(); 
            $table->string('expiry_date', 7);
            $table->string('CVV', 4);
            $table->enum('status', ['active','expired','cancelled' ])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
