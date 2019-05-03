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
            'nama_jurusan' => 'D3 - S1 Manajemen Keuangan',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'D3 - S1 Manajemen Pemasaran',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'D3 - S1 Teknik Komputer',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Agroteknologi',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Desain Interior',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Ekonomi Syariah',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Farmasi',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Pariwisata',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Sastra Tiongkok',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - Kebidanan',
            'status' => 1
        )
      );
      DB::table('jurusan')->insert(
        array(
            'nama_jurusan' => 'S1 - S2 SARMAG Teknik Mesin',
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
