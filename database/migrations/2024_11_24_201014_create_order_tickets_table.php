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
        Schema::create('order_tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('orderTicket_id')->constrained()->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('telepon');
            $table->string('email');
            $table->string('alamat');
            $table->date('tanggal_pesan');
            $table->date('waktu_pesan');
            $table->integer('jumlah_tiket');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_tickets');
    }
};
