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
        dd($nilai);
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
    // public function export(){
    //   $manage = DB::table('mhs')
    //   ->join('nilai', 'mhs.id', '=', 'nilai.id_mhs')
    //   ->join('smasmk', 'mhs.id', '=', 'smasmk.id_mhs')
    //   ->get();
    //   // dd($manage);
    //   return view('partial.export')->with(compact('manage'));
    // }

//     public function export(){
//       // $items = Mhs::all();
//       $items = DB::table('mhs')
//       ->join('nilai', 'mhs.id', '=', 'nilai.id_mhs')
//       ->join('smasmk', 'mhs.id', '=', 'smasmk.id_mhs')
//       ->get();
//
//       var_dump($items); die();
//       // $nilai = nilai::all();
//       // $smasmk = Smasmk::all();
//       Excel::create('items', function($excel) use($items) {
//           $excel->sheet('ExportFile', function($sheet) use($items) {
//               $sheet->fromArray($items);
//           });
//       })->export('xls');
// }

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
                    foreach($sma as $sma){
                  $data1 = array($m->id, $m->nama_lengkap, $m->tempat,
                                $sim->id, $sim->mtkxi1, $sim->mtkxi2,
                                $sma->id, $sma->thn_lulus, $sma->nama_cp);
                                array_push($arr, $data1);

                }
                }
              }


                //set the titles
                $sheet->fromArray($arr,null,'A1',false,false)->prependRow(array(
                        'Id', 'Nama Lengkap', 'Tempat Lahir',
                        'Id', 'MTK', 'MTK',
                        'Id', 'Tahun Lulus', 'Nama Contact Person'
                    )

                );

            });

        })->export('xls');
    }

}
