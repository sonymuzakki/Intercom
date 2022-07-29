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
        Schema::create('inventory', function (Blueprint $table) {
            $table->bigIncrements('id_inventaris');
            $table->string('hostname');
            $table->string('jenis');
            $table->string('merk');
            $table->string('processor');
            $table->string('ram');
            $table->string('grafik');
            $table->string('hardisk');
            $table->string('ssd');
            $table->string('os');
            $table->string('isLegalOs');
            $table->string('office');
            $table->string('akunoffice');
            $table->integer('internet');
            $table->string('companyemail');
            $table->string('useraccount');
            $table->string('anydeskId');
            $table->foreignId('id_users')->cascade('delete');
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
        Schema::dropIfExists('inventory');
    }
};