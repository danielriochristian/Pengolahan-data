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
    }

  public function edit($id)
  {
    $manage = DB::table('mhs')
          ->join('nilai', 'mhs.id', '=', 'nilai.id_mhs')
          ->join('smasmk', 'mhs.id', '=', 'smasmk.id_mhs')
          ->select('mhs.*', 'nilai.*', 'smasmk.*')
          ->get();
      if(!$manage){
          abort(503);
      }
      return view('partial.editmhs')->with(compact('manage',$manage));
  }
}
