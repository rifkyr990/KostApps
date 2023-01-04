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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->integer('kost_id');
            $table->string('nama_pemesan');
            $table->text('alamat_pemesan');
            $table->integer('telp');
            $table->date('tanggal');
            $table->integer('total_cost');
            $table->integer('pembayaran_id')->default('1');
            $table->integer('status_id')->default('1');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasis');
    }
};
