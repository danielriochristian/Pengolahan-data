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

class FormIsianController extends Controller
{
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
        dd($mhs);
        $mhs->save();

        $nilai = Nilai::where('id_mhs',$manage[0]->id)->first();
        // dd($nilai-> bingx1);
        //kelas 10 smt 1
        $nilai -> bingx1 = $request->bhsingx1;
        $nilai -> mtkx1 = $request->mtkx1;
        $nilai -> fisika_ekonomix1 = $request->fisekx1;
        $nilai -> biologi_geografix1 = $request->bigeox1;
        $nilai -> kimia_sosiologix1 = $request->kimsox1;
        //kelas 10 smt 2
        $nilai -> bingx2 = $request->bhsingx2;
        $nilai -> mtkx2 = $request->mtkx2;
        $nilai -> fisika_ekonomix2 = $request->fisekx2;
        $nilai -> biologi_geografix2 = $request->bigeox2;
        $nilai -> kimia_sosiologix2 = $request->kimsox2;
        //kelas 11 smt 1
        $nilai -> bingxi2 = $request->bhsingxi1;
        $nilai -> mtkxi2 = $request->mtkxi1;
        $nilai -> fisika_ekonomixi2 = $request->fisekxi1;
        $nilai -> biologi_geografixi2 = $request->bigeoxi1;
        $nilai -> kimia_sosiologixi2 = $request->kimsoxi1;
        //kelas 12 smt 1
        $nilai -> bingxii2 = $request->bhsingxii2;
        $nilai -> mtkxii2 = $request->mtkxii2;
        $nilai -> fisika_ekonomixii2 = $request->fisekxii2;
        $nilai -> biologi_geografixii2 = $request->bigeoxii2;
        $nilai -> kimia_sosiologixii2 = $request->kimsoxii2;
        $nilai -> nilai_total = $request->nilai_total;
        $nilai -> rata_rata = $request->rata_rata;
        $nilai -> change_by = $cekadmin;
        $nilai->save();

        //smasmk
        $sma = Smasmk::where('id_mhs',$manage[0]->id)->first();
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
        $sma -> change_by = $cekadmin;
        $sma->save();
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
}
