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
        Schema::create('kosts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik');
            $table->string('telp');
            $table->text('alamat');
            $table->integer('category_id');
            $table->integer('total_kamar');
            $table->string('fasilitas');
            $table->integer('type_id');
            $table->string('luas');
            $table->string('foto');
            $table->integer('harga');
            $table->integer('user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kosts');
    }
};
