<?php

use App\Models\divisi;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_itc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->foreignId('idd')->cascade('delete');
            $table->foreignId('idl')->cascade('delete');
            $table->timestamps();
            // $table->foreign('id_mahasiswa')->references('id')->on('mahasiswas');
        });

        // Schema::create('users', function (Blueprint $table) {
        //     $table->foreignId('id_divisi')->references('id_divisi')->on('divisi');
        // });
    }


    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_itc');
    }
};