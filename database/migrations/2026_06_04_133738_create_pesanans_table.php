<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pelanggan_id')->containered('pelanggans')->onDelete('cascade');

            $table->foreignId('produk_id')->containered('produks')->onDelete('cascade');

            $table->integer('jumlah');
            $table->date('tanggal_pesanan');

            $table->string('status')->default('pending');

            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
