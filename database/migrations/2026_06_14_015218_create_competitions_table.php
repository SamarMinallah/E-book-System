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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
           $table->string('title'); // Competition Title
        
        $table->string('type'); 
        // Competition Type
        
        $table->date('start_date');
        
        $table->date('end_date');
        
        $table->text('rules');
        
        $table->string('prize1');
        $table->string('prize2');
        $table->string('prize3');

        $table->string("description",255);
 
        $table->enum('status',['Open','Close'])->default('Open');

          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};