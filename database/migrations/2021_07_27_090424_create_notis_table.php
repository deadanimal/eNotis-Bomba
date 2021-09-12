<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notis', function (Blueprint $table) {
            $table->id();
            // $table->String('nama');
            // $table->String('alamat');
            // // $table->String('jenis_kesalahan', 250);
            // // $table->String('lokasi_kesalahan',250);
            // $table->Integer('tempoh_notis');
            // // $table->String('gambar', 250);
            // // $table->String('status',50);

            $table->date('tarikh_pemeriksaan')->nullable();
            $table->String('no_siri')->nullable();
            $table->String('jenis_ppk')->nullable();
            $table->String('kesalahan')->nullable();
            $table->String('lokasi')->nullable();
            $table->String('aras')->nullable();
            $table->String('pembetulan')->nullable();
            $table->String('seksyen')->nullable();
            $table->String('tempoh')->nullable();
            $table->String('img_notis')->nullable();//img uploaded
            $table->String('status')->nullable();
            $table->String('tujuan')->nullable();
            $table->foreignId('id_premis')->nullable();

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
        Schema::dropIfExists('notis');
    }
}
