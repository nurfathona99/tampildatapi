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
        Schema::create('additonal_costs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengeluaran', 255);
            $table->string('keterangan', 1000);
            $table->string('biaya', 200);
            $table->timestamp('tanggal_transaksi');
            $table->string('nama_konsumen', 50);
            $table->string('email_konsumen', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uts');
    }
};
