<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->date('tanggal_peminjaman');
        $table->date('tanggal_pengembalian');
        $table->foreignId('buku_id')->constrained('bukus')->onDelete('cascade');
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); 
        $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamen');
    }
};
