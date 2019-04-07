<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mhs', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('no_urut')->nullable();
          $table->unsignedInteger('no_ujian');
          $table->string('nama_lengkap');
          $table->string('tempat');
          $table->date('tgl_lahir');
          $table->string('telp_rumah',10);
          $table->string('no_hp_siswa',15);
          $table->string('no_hp_orangtua',15);
          $table->string('alamat');
          $table->string('nm_jln');
          $table->string('rt/rw',10);
          $table->string('kelurahan',20);
          $table->string('kecamatan',20);
          $table->string('kab/kota',20);
          $table->string('kode_pos',10);
          $table->string('email');
          $table->string('status');
          $table->string('jurursan');
          $table->string('change_by');
          $table->timestamps();
      });
      Schema::create('nilai', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('id_mhs')->nullable();
          //10 smt 1
          $table->float('bingx1', 4, 2);
          $table->float('mtkx1', 4, 2);;
          $table->float('fisika_ekonomix1', 4, 2);
          $table->float('biologi_geografix1', 4, 2);
          $table->float('kimia_sosiologix1', 4, 2);
          //10 smt 2
          $table->float('bingx2', 4, 2);
          $table->float('mtkx2', 4, 2);;
          $table->float('fisika_ekonomix2', 4, 2);
          $table->float('biologi_geografix2', 4, 2);
          $table->float('kimia_sosiologix2', 4, 2);
          //11 smt 1
          $table->float('bingxi1', 4, 2);
          $table->float('mtkxi1', 4, 2);;
          $table->float('fisika_ekonomixi1', 4, 2);
          $table->float('biologi_geografixi1', 4, 2);
          $table->float('kimia_sosiologixi1', 4, 2);
          //11 smt 2
          $table->float('bingxi2', 4, 2);
          $table->float('mtkxi2', 4, 2);;
          $table->float('fisika_ekonomixi2', 4, 2);
          $table->float('biologi_geografixi2', 4, 2);
          $table->float('kimia_sosiologixi2', 4, 2);
          //12 smt 1
          $table->float('bingxii2', 4, 2);
          $table->float('mtkxii2', 4, 2);;
          $table->float('fisika_ekonomixii2', 4, 2);
          $table->float('biologi_geografixii2', 4, 2);
          $table->float('kimia_sosiologixii2', 4, 2);
          $table->string('change_by');
          $table->timestamps();
      });
      Schema::table('nilai', function(Blueprint $kolom){
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
         Schema::dropIfExists('mhs');
         Schema::dropIfExists('nilai');
    }
}
