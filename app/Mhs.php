<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    protected $table = 'mhs';
    protected $fillable = ['no_ujian', 'nama_lengkap', 'tempat'];
}
