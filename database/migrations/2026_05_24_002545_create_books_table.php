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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('bookname');
            $table->string('authorname');
            $table->UnsignedBigInteger('pricepdf');
            $table->UnsignedBigInteger('pricehardcopy');
            $table->UnsignedBigInteger('pricecd');
            $table->UnsignedBigInteger('stock');
            $table->text('description');
            $table->string('bookcover');
            $table->string('bookpdf');
            $table->string('backcover');
            $table->string('publishername');
            $table->date('publishdate');
            $table->string('Language');
            $table->UnsignedBigInteger('pages');
            $table->string('ISBN');
            $table->string('Edition');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
