<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premis', function (Blueprint $table) {
            $table->id();

            $table->String('nama_premis');
            $table->String('alamat');
            $table->String('jenis_perniagaan');
            $table->String('pemilik');
            $table->String('no_tel');
            $table->Integer('no_premis');
            //$table->foreignId('id_notis');


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
        Schema::dropIfExists('premis');
    }
}
