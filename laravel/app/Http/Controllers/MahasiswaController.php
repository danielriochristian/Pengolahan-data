<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Mhs;
use App\Smasmk;
use Illuminate\Support\Facades\Redirect;

class MahasiswaController extends Controller
{
  public function getRoleAdmin() {
      $rolesyangberhak = DB::table('roles')->where('id','=','2')->first()->namaRule;
      return $rolesyangberhak;
  }
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('rule:'.$this->getRoleAdmin().',nothingelse');
  }
    public function index()
    {
        return view ('partial.master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $mhs = Mhs::All();
      // $ceknourut = DB::table('mhs')->orderBy('no_urut', 'desc')->first()->no_urut;
      $cekadmin= Auth::User()->name;
      $hitung = DB::table('mhs')->count();
      // dd($hitung);
      // DB::table('mhs')->orderBy('no_urut', 'desc')->first()->no_urut;
      // dd($mhs);
      // dd($ceknourut);
      if($hitung > 0){
        $manage = DB::table('mhs')->orderBy('no_urut', 'desc')->first()->no_urut;
        $no_urut = $manage + 1;
      }else {
        $no_urut = 000001;
      }

      // if($ceknourut == null){
      //   $no_urut = 000001;
      // }
      // else{
      //  $no_urut = $ceknourut + 1;
      // }
      // insert data ke table pegawai
	     DB::table('mhs')->insert([
       'no_urut' => $no_urut,
		   'no_ujian' => $request->no_ujian,
		   'nama_lengkap' => $request->nama_lengkap,
		   'tempat' => $request->tempat,
		   'tgl_lahir' => $request->tgl_lahir,
       'telp_rumah' => $request->telp_rumah,
		   'no_hp_siswa' => $request->no_hp_siswa,
		   'no_hp_orangtua' => $request->no_hp_orangtua,
		   'alamat' => $request->alamat,
       'nm_jln' => $request->nm_jln,
		   'rtrw' => $request->rtrw,
		   'kelurahan' => $request->kelurahan,
		   'kecamatan' => $request->kecamatan,
       'kabkota' => $request->kabkota,
		   'kode_pos' => $request->kode_pos,
		   'email' => $request->email,
		   'status' => $request->status,
       'jurusan' => $request->jurusan,
		   'nama_lengkap' => $request->nama_lengkap,
		   'tempat' => $request->tempat,
		   'tgl_lahir' => $request->tgl_lahir,
       'change_by' => $cekadmin
	     ]);

       DB::table('nilai')->insert([
		   'bingx1' => $request->bingx1,
		   'mtkx1' => $request->mtkx1,
		   'fisika_ekonomix1' => $request->fisika_ekonomix1,
		   'biologi_geografix1' => $request->biologi_geografix1,
       'kimia_sosiologix1' => $request->kimia_sosiologix1,
		   'bingx2' => $request->bingx2,
		   'mtkx2' => $request->mtkx2,
		   'fisika_ekonomix2' => $request->fisika_ekonomix2,
       'biologi_geografix2' => $request->biologi_geografix2,
		   'kimia_sosiologix2' => $request->kimia_sosiologix2,
		   'bingxi1' => $request->bingxi1,
		   'mtkxi1' => $request->mtkxi1,
       'fisika_ekonomixi1' => $request->fisika_ekonomixi1,
		   'biologi_geografixi1' => $request->biologi_geografixi1,
		   'kimia_sosiologixi1' => $request->kimia_sosiologixi1,
		   'bingxi2' => $request->bingxi2,
       'mtkxi2' => $request->mtkxi2,
		   'fisika_ekonomixi2' => $request->fisika_ekonomixi2,
		   'biologi_geografixi2' => $request->biologi_geografixi2,
		   'kimia_sosiologixi2' => $request->kimia_sosiologixi2,
       'bingxii2' => $request->bingxii2,
		   'mtkxii2' => $request->mtkxii2,
		   'fisika_ekonomixii2' => $request->fisika_ekonomixii2,
		   'biologi_geografixii2' => $request->biologi_geografixii2,
       'kimia_sosiologixii2' => $request->kimia_sosiologixii2,
		   'nilai_total' => $request->nilai_total,
		   'rata_rata' => $request->rata_rata,
       'change_by' => $cekadmin
	     ]);
       DB::table('smasmk')->insert([
		   'thn_lulus' => $request->thn_lulus,
		   'nama_cp' => $request->nama_cp,
		   'jabatan_cp' => $request->jabatan_cp,
		   'email_cp' => $request->email_cp,
       'alamat1' => $request->alamat1,
		   'alamat2' => $request->alamat2,
		   'kota_sekolah' => $request->kota_sekolah,
		   'telp_sekolah' => $request->telp_sekolah,
       'fax_sekolah' => $request->fax_sekolah,
		   'nilai_tpa' => $request->nilai_tpa,
		   'nilai_bing' => $request->nilai_bing,
		   'catatan' => $request->catatan,
       'titipandosen' => $request->titipandosen,
		   'hubungan' => $request->hubungan,
		   'tgl_seleksi' => $request->tgl_seleksi,
		   'shift_ujian' => $request->shift_ujian,
       'pilihan1' => $request->pilihan1,
		   'pilihan2' => $request->pilihan2,
       'change_by' => $cekadmin
		   ]);
      if ($request->hasFile('tes')) {
      $namafile = $request->file('tes')->getClientOriginalName();
      // $ext = $request->file('tes')->getClientOriginalExtension();
      $lokasifileskr = '/upload/'.$namafile;
      //cek jika file sudah ada...
      // $cekdivisi = Auth::User()->division;
      // $cekname = Auth::User()->name;
      // var_dump($cekdivisi);die();

      $destinasi = public_path('/upload');
      $proses = $request->file('tes')->move($destinasi,$namafile);

      $taxs = new Smasmk;
      $taxs->upload = $lokasifileskr;
      $taxs->save();

      return redirect('/mahasiswa')->with('message','data berhasil ditambahkan!!');
      }
        else {
               return Redirect::back()->withErrors(['anda tidak memiliki akses']);
             }
          }
       }
