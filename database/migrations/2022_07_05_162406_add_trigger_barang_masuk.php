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
        DB::unprepared('CREATE TRIGGER tambah_stok AFTER INSERT ON `barang_masuk` FOR EACH ROW
                BEGIN
                   UPDATE barang  SET stok=stok+NEW.jumlah WHERE kode_barang=NEW.kode_barang;
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `tambah_stok`');
    }
};
