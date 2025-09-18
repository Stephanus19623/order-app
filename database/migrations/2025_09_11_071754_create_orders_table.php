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
            $table->string('company_name');
            $table->string('buyer_name');
            $table->string('delivery')->nullable(); 
            $table->integer('quantity');
            $table->dateTime('due_date');
            $table->enum('status', ['On Progress', 'Checked', 'Deliver'])->default('On Progress');
            $table->timestamps();
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
