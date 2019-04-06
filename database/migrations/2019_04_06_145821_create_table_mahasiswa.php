<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mahasiswa', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('no_urut');
          $table->char('no_ujian');
          $table->string('nama_lgkp');
          $table->string('ttl');
          $table->integer('telp_rmh');
          $table->integer('hp_siswa');
          $table->integer('hp_ortu');
          $table->string('alamat_siswa');
          $table->string('nama_jln');
          $table->char('rt_rw');
          $table->string('kelurahan');
          $table->string('kecamatan');
          $table->string('kota');
          $table->smallInteger('kode_pos');
          $table->string('email');
          $table->string('status');
          $table->string('jurusan');
          $table->float('total_nilai');
          $table->float('rata_rata');
          $table->smallInteger('thn_lulus');
          $table->string('nama_cp');
          $table->string('jabatan');
          $table->integer('hp_cp');
          $table->string('email_cp');
          $table->string('alamat_sekolah');
          $table->string('kota_sekolah');
          $table->integer('telp_sekolah');
          $table->integer('fax_sekolah');
          $table->integer('nilai_tpa');
          $table->integer('nilai_bing');
          $table->string('catatan');
          $table->string('titipan');
          $table->string('hubungan');
          $table->date('tgl_seleksi');
          $table->tinyInteger('shift');
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
        Schema::dropIfExists('mahasiswa');
    }
}
