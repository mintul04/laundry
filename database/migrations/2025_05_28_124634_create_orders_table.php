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
            $table->foreignId('user_id');
            $table->date('tanggal_pesan');
            $table->enum('status_pesanan', ['menunggu','diproses','selesai','siap_diantar']);
            $table->string('bukti_pembayaran')->nullable();
            $table->boolean('verifikasi_pembayaran')->default(false);
            $table->date('tanggal_selesai');
            $table->integer('total_harga');
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
