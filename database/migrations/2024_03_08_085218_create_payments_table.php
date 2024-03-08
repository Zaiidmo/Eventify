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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_reference');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
            $table->foreignId('event_id')->constrained()->onUpdate('cascade');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['pending','canceled', 'paid', 'failed']);
            $table->softDeletes();
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
