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
    Schema::create('tickets', function (Blueprint $table) {
        $table->id();
        $table->foreignId('event_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        $table->float('price');
        $table->date('purchase_date')->default(now());
        $table->enum('status', ['pending', 'approved', 'denied'])->default('pending');
        $table->timestamps();

        // Add unique constraint on event_id and user_id
        $table->unique(['event_id', 'user_id']);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
