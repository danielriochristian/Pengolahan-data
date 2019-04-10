<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJurusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('jurusan', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama_jurusan');
          $table->tinyInteger('status');
          $table->timestamps();
      });
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'D3 - S1 Manajemen Keuangan (Semua Jurusan SMA/MA/SMK)',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'D3 - S1 Manajemen Pemasaran  (Semua Jurusan SMA/MA/SMK)',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'D3 - S1 Teknik Komputer  (Jurusan IPA atau sebidang SMA/MA/SMK)',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Agroteknologi  (Jurusan IPA atau sebidang SMA/MA/SMK)',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Desain Interior  (Jurusan IPA atau sebidang SMA/MA/SMK)',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Ekonomi Syariah  (Semua Jurusan SMA/MA/SMK)',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Farmasi  (Jurusan IPA atau sebidang SMA/MA/SMK)',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Pariwisata  (Semua Jurusan SMA/MA/SMK)',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Sastra Tiongkok  (Semua Jurusan SMA/MA/SMK)',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Kebidanan (Wanita Jurusan IPA atau sebidang SMA/MA/SMK)',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - S2 SARMAG Teknik Mesin  (Jurusan IPA atau sebidang SMA/MA/SMK)',
            'status' => 1
        )
      );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('jurusan');
    }
}
