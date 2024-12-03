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
            $table->uuid('id')->primary();
            $table->timestamps();
            // $table->uuid('user_id');         // UUID untuk foreign key

            // // Relasi Foreign Key ke tabel users
            // $table->foreign('user_id')
            //       ->references('id')
            //       ->on('users')
            //       ->onDelete('cascade')  // Menghapus data order_tickets jika user dihapus
            //       ->onUpdate('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('telepon');
            $table->string('email');
            $table->string('alamat');
            $table->date('tanggal_pesan');
            $table->time('waktu_pesan');
            $table->integer('jumlah_tiket');
            $table->bigInteger('total_harga');
            $table->enum('harga_masuk', ['anak-anak', 'dewasa']);
            $table->enum('harga_parkir', ['motor', 'mobil']);
            $table->enum('status', ['Unpaid', 'paid'])->default('Unpaid');
            $table->string('payment_method')->nullable();
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
