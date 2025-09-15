<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignID('company_id')->constrained(
                table: 'companies',
                indexName:'orders_company_id_foreign'
            );
            $table->foreignId('product_id')->constrained(
                table: Product::class,
                indexName:'orders_product_id_foreign'
            );
            $table->integer('quantity');
            $table->dateTime('due_date');
            $table->string('status')->default('pending');
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
