<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSmasmk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('smasmk', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('id_mhs')->nullable();
          $table->string('thn_lulus');
          $table->string('nama_cp');
          $table->string('jabatan_cp');
          $table->string('nohp_cp',15);
          $table->string('email_cp');
          $table->string('alamat1');
          $table->string('alamat2');
          $table->string('kota_sekolah');
          $table->string('telp_sekolah');
          $table->string('fax_sekolah',10);
          $table->float('nilai_tpa', 8, 2);
          $table->float('nilai_bing', 8, 2);
          $table->string('catatan');
          $table->string('titipandosen');
          $table->string('hubungan');
          $table->date('tgl_seleksi');
          $table->string('shift_ujian');
          $table->string('pilihan1');
          $table->string('pilihan2');
          $table->string('upload');
          $table->string('change_by');
          $table->timestamps();
      });
      Schema::table('smasmk', function(Blueprint $kolom){
        $kolom->foreign('id_mhs')->references('id')->on('mhs')->onDelete('cascade')->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('smasmk');
    }
}
