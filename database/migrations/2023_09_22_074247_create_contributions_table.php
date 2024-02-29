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
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id');
            $table->string('identity')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('card_number')->nullable();
            $table->string('payment_status');
            $table->json('payment_details')->nullable();
            $table->bigInteger('amount');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};
