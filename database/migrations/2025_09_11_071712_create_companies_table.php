<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');       // nama perusahaan
            $table->string('address')->nullable();  // alamat perusahaan
            $table->string('email')->nullable();    // email perusahaan
            $table->string('phone')->nullable();    // nomor telepon
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
