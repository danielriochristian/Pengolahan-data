<?php

namespace App\Http\Controllers;


use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Mhs;


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
            //$this->validate($request, [
            //'title'   => 'required',
            //'subject' => 'required', ]);


        $manage = DB::table('mhs')
        ->join('nilai', 'mhs.id', '=', 'nilai.id_mhs')
        ->join('smasmk', 'mhs.id', '=', 'smasmk.id_mhs')
        ->where('mhs.id','=',$id)
        ->get();
        $manage->nama_lengkap = $request->nama_lengkap;
        var_dump($manage);die();
        $manage->save();

        return redirect('managearticle')->with('message','data berhasil ditambahkan!!');
    }
}
