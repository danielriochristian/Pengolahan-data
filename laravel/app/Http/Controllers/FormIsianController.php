<?php

namespace App\Http\Controllers;


use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Facades\Datatables;
use App\Mhs;
use App\Nilai;
use App\Smasmk;
use Maatwebsite\Excel\Facades\Excel;

class FormIsianController extends Controller
{
  // public function getRoleAdmin() {
  //     $rolesyangberhak = DB::table('roles')->where('id','=','2','1')->first()->namaRule;
  //     return $rolesyangberhak;
  // }
  public function __construct()
  {
      $this->middleware('auth');
      // $this->middleware('rule:'.$this->getRoleAdmin().',nothingelse');
  }
  public function index()
    {
      $manage = DB::table('mhs')
            ->join('nilai', 'mhs.id', '=', 'nilai.id_mhs')
            ->join('smasmk', 'mhs.id', '=', 'smasmk.id_mhs')
            ->select('mhs.*', 'nilai.*', 'smasmk.*')
            ->get();
      // var_dump($manage);die();
      return view('partial.formisian')->with(compact('manage'));
      // $manages = Mhs::all();
      // return view('partial.formisian', ['manages' => $manages]);
    }

  public function edit($id)
  {
    // $manages = Mhs::find($id);
      // if(!$manages){
      //     abort(503);
      // }
      // return view('partial.editmhs')->with('manages',$manages);
    $manage = DB::table('mhs')
    ->join('nilai', 'mhs.id', '=', 'nilai.id_mhs')
    ->join('smasmk', 'mhs.id', '=', 'smasmk.id_mhs')
    ->where('mhs.id','=',$id)
    ->get();
          // var_dump($manage);die();
      if(!$manage){
          abort(503);
      }
      return view('partial.editmhs',['manage' => $manage]);

  }
  public function update(Request $request, $id)
    {

       $cekadmin= Auth::User()->name;
        $manage = DB::table('mhs')
        ->join('nilai', 'mhs.id', '=', 'nilai.id_mhs')
        ->join('smasmk', 'mhs.id', '=', 'smasmk.id_mhs')
        ->where('mhs.id','=',$id)
        ->get();
        // dd($manage);
        $mhs = Mhs::find($manage[0]->id);
        $mhs -> no_urut = $manage[0]->no_urut;
        $mhs -> no_ujian = $manage[0]->no_ujian;
        $mhs -> nama_lengkap = $request->nama_lengkap;
        $mhs -> tempat = $request->tempat;
        $mhs -> tgl_lahir = $request->tgl_lahir;
        $mhs -> telp_rumah = $request->telp_rumah;
        $mhs -> no_hp_siswa = $request->no_hp_siswa;
        $mhs -> no_hp_orangtua = $request->no_hp_orangtua;
        $mhs -> alamat = $request->alamat;
        $mhs -> nm_jln = $request->nm_jln;
        $mhs -> rtrw = $request->rtrw;
        $mhs -> kelurahan = $request->kelurahan;
        $mhs -> kecamatan = $request->kecamatan;
        $mhs -> kabkota = $request->kabkota;
        $mhs -> kode_pos = $request->kode_pos;
        $mhs -> jurusan = $request->jurusan;
        $mhs -> change_by = $cekadmin;
        // dd($mhs);
        $mhs->save();

        $nilai = Nilai::where('id_mhs',$manage[0]->id)->first();
        // dd($nilai-> bingx1);
        //kelas 10 smt 1
        $nilai -> bingx1 = $request->bingx1;
        $nilai -> mtkx1 = $request->mtkx1;
        $nilai -> fisika_ekonomix1 = $request->fisika_ekonomix1;
        $nilai -> biologi_geografix1 = $request->biologi_geografix1;
        $nilai -> kimia_sosiologix1 = $request->kimia_sosiologix1;
        //kelas 10 smt 2
        $nilai -> bingx2 = $request->bingx2;
        $nilai -> mtkx2 = $request->mtkx2;
        $nilai -> fisika_ekonomix2 = $request->fisika_ekonomix2;
        $nilai -> biologi_geografix2 = $request->biologi_geografix2;
        $nilai -> kimia_sosiologix2 = $request->kimia_sosiologix2;
        //kelas 11 smt 1
        $nilai -> bingxi1 = $request->bingxi1;
        $nilai -> mtkxi1 = $request->mtkxi1;
        $nilai -> fisika_ekonomixi1 = $request->fisika_ekonomixi1;
        $nilai -> biologi_geografixi1 = $request->biologi_geografixi1;
        $nilai -> kimia_sosiologixi1 = $request->kimia_sosiologixi1;
        //kelas 11 smt 1
        $nilai -> bingxi2 = $request->bingxi2;
        $nilai -> mtkxi2 = $request->mtkxi2;
        $nilai -> fisika_ekonomixi2 = $request->fisika_ekonomixi2;
        $nilai -> biologi_geografixi2 = $request->biologi_geografixi2;
        $nilai -> kimia_sosiologixi2 = $request->kimia_sosiologixi2;
        //kelas 12 smt 1
        $nilai -> bingxii2 = $request->bingxii2;
        $nilai -> mtkxii2 = $request->mtkxii2;
        $nilai -> fisika_ekonomixii2 = $request->fisika_ekonomixii2;
        $nilai -> biologi_geografixii2 = $request->biologi_geografixii2;
        $nilai -> kimia_sosiologixii2 = $request->kimia_sosiologixii2;
        $nilai -> nilai_total = $request->nilai_total;
        $nilai -> rata_rata = $request->rata_rata;
        $nilai -> change_by = $cekadmin;
        // dd($nilai);
        $nilai->save();

        //smasmk
        $sma = Smasmk::where('id_mhs',$manage[0]->id)->first();
        $namafile = $request->file('tes')->getClientOriginalName();
        $lokasifileskr = '/upload/'.$namafile;
        $destinasi = public_path('/upload');
        $proses = $request->file('tes')->move($destinasi,$namafile);

        $namafile2 = $request->file('tes2')->getClientOriginalName();
        $lokasifileskr2 = '/upload/'.$namafile2;
        $destinasi2 = public_path('/upload');
        $proses2 = $request->file('tes2')->move($destinasi2,$namafile2);

        $sma -> thn_lulus = $request->thn_lulus;
        $sma -> nama_cp = $request->nama_cp;
        $sma -> jabatan_cp = $request->jabatan_cp;
        $sma -> nohp_cp = $request->nohp_cp;
        $sma -> email_cp = $request->email_cp;
        $sma -> alamat1 = $request->alamat1;
        $sma -> alamat2 = $request->alamat2;
        $sma -> kota_sekolah = $request->kota_sekolah;
        $sma -> telp_sekolah = $request->telp_sekolah;
        $sma -> fax_sekolah = $request->fax_sekolah;
        $sma -> nilai_tpa = $request->nilai_tpa;
        $sma -> nilai_bing = $request->nilai_bing;
        $sma -> catatan = $request->catatan;
        $sma -> titipandosen = $request->titipandosen;
        $sma -> hubungan = $request->hubungan;
        $sma -> tgl_seleksi = $request->tgl_seleksi;
        $sma -> shift_ujian = $request->shift_ujian;
        $sma -> pilihan1 = $request->jurusan1;
        $sma -> pilihan2 = $request->jurusan2;
        $sma -> upload = $lokasifileskr;
        $sma -> upload2 = $lokasifileskr2;
        $sma -> change_by = $cekadmin;
        
        $sma -> save();




// var_dump($manage);die();
        // $manage->save();

    return redirect('formisian')->with('message','data berhasil ditambahkan!!');

}
    public function deleteForm(request $request){
    $manage = Mhs::find ($request->id)->delete();
    return response()->json();
    }

    public function mhstb(){
        return DataTables::of(Mhs::query())
        ->addColumn('action', function ($datatb) {
            return
            '<a href="formisian/'.$datatb->id.'/edit"> <button class="edit-modal btn btn-xs btn-info" type="submit"> Edit </button> </a>'
             .'<div style="padding-top:10px"></div>'
            .'<button data-id="'.$datatb->id.'" class="delete-modal btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>';
        })
        ->make(true);
    }


public function export(){
  Excel::create('records', function($excel) {

            $excel->sheet('Sheet1', function($sheet) {
                $mhs = Mhs::all();
                $sims = Nilai::all();
                $sma = Smasmk::all();
                $arr =array();
                // foreach($mhs as $employee) {
                //     foreach($employee->sims as $sim){
                //         $data1 =  array($employee->id, $employee->nama_lengkap, $employee->tempat,
                //             $sim->id, $sim->mtkxi1, $sim->mtkxi2);
                //             dd($data);
                //         array_push($arr, $data);
                //     }
                // }
                foreach($mhs as $m){
                  foreach($sims as $sim){
                    foreach($sma as $sm){
                      $data1 = array($m->id, $m->no_ujian, $m->nama_lengkap, $m->tempat, $m->tgl_lahir, $m->telp_rumah, $m->no_hp_siswa, $m->no_hp_orangtua, $m->alamat, $m->nm_jln,
                                    $m->rtrw, $m->kelurahan, $m->kecamatan, $m->kabkota, $m->kode_pos, $m->email,$m->status,$m->jurusan,
                                    $sim->bingx1, $sim->mtkx2,$sim->fisika_ekonomix1,$sim->biologi_geografix1,$sim->kimia_sosiologix1,
                                    $sim->bingx2, $sim->mtkx2,$sim->fisika_ekonomix2,$sim->biologi_geografix2,$sim->kimia_sosiologix2,
                                    $sim->bingxi1,$sim->mtkxi1,$sim->fisika_ekonomixi1,$sim->biologi_geografixi1,$sim->kimia_sosiologixi1,
                                    $sim->bingxi2,$sim->mtkxi2,$sim->fisika_ekonomixi2,$sim->biologi_geografixi2,$sim->kimia_sosiologixi2,
                                    $sim->bingxii2,$sim->mtkxii2,$sim->fisika_ekonomixii2,$sim->biologi_geografixii2,$sim->kimia_sosiologixii2,
                                    $sim->nilai_total,$sim->rata_rata,
                                    $sm->thn_lulus,$sm->nama_cp,$sm->jabatan_cp,$sm->nohp_cp,$sm->email_cp,$sm->alamat1,$sm->alamat2,$sm->kota_sekolah,$sm->telp_sekolah,
                                    $sm->fax_sekolah,$sm->nilai_tpa,$sm->nilai_bing,$sm->catatan,$sm->titipandosen,$sm->hubungan,$sm->tgl_seleksi,$sm->shift_ujian,$sm->pilihan1,
                                    $sm->pilihan2,$sm->upload,$sm->change_by);
                                    array_push($arr, $data1);
                }
                }
              }


                //set the titles
                $sheet->fromArray($arr,null,'A1',false,false)->prependRow(array(
                        'Id','No Ujian','Nama Lengkap','Tempat Lahir','Tanggal Lahir','Telpon Rumah','No Hp Siswa','No HP Orang Tua','Alamat','Nama Jalan','RT/RW',
                        'Kelurahan','Kecamatan','Kabupaten/Kota','Kode Pos','Email','Status','Jurusan',
                        'Bahasa Inggris SMT 1', 'Matematika SMT 1', 'Fisika/Ekonomi SMT 1','Biologi/Geografi SMT 1','Kimia/Sosisologi SMT 1',
                        'Bahasa Inggris SMT 2', 'Matematika SMT 2', 'Fisika/Ekonomi SMT 2','Biologi/Geografi SMT 2','Kimia/Sosisologi SMT 2',
                        'Bahasa Inggris SMT 3', 'Matematika SMT 3', 'Fisika/Ekonomi SMT 3','Biologi/Geografi SMT 3','Kimia/Sosisologi SMT 3',
                        'Bahasa Inggris SMT 4', 'Matematika SMT 4', 'Fisika/Ekonomi SMT 4','Biologi/Geografi SMT 4','Kimia/Sosisologi SMT 4',
                        'Bahasa Inggris SMT 5', 'Matematika SMT 5', 'Fisika/Ekonomi SMT 5','Biologi/Geografi SMT 5','Kimia/Sosisologi SMT 5',
                        'Tahun Lulus', 'Nama Contact Person','Jabatan CP','No Hp CP','Email CP','Alamat 1','Alamat 2','Kota Sekolah','Telpon Sekolah','Fax Sekolah','Nilai TPA',
                        'Nilai Bahasa Inggris','Catatan','Titipan Dosen','Hubungan','Tanggal Seleksi','Shift Ujian','Pilihan 1','Pilihan 2','Upload','Change By')
                );

            });

        })->export('xls');
    }

}
