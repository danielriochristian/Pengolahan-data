<?php
namespace App\Http\Controllers;

use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Jurusan;
class JurusanController extends Controller
{

    // public function getRoleJurusan() {
    //     $rolesyangberhak = DB::table('roles')->where('id','=','1')->get()->first()->namaRule;
    //     return $rolesyangberhak;
    // }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('rule:'.$this->getRoleJurusan().',nothingelse');
    // }
    public function index(){
      $manage = Jurusan::paginate(4);
        return view('partial.Jurusan', compact('manage'));
    }

    public function addJurusan(Request $request){
    $rules = array(
      'nama_jurusan' => 'required',
      'status' => 'required',
    );
  $validator = Validator::make ( Input::all(), $rules);
  if ($validator->fails())
  return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
  else {
    $manage = new Jurusan;
    $manage->nama_jurusan = $request->nama_jurusan;
    $manage->status = $request->status;
    // var_dump($manage);die();
    $manage->save();
    return response()->json($manage);
  }
}
    public function editJurusan(request $request){
    $manage = Jurusan::find ($request->id);
    $manage->nama_jurusan = $request->jurusan;
    $manage->status = $request->status;
    // $manage->password = bcrypt($request['password']);
    $manage->save();
    return response()->json($manage);
    }
    public function deleteJurusan(request $request){
    $manage = Jurusan::find ($request->id)->delete();
    return response()->json();
    }

    public function jurusantb(){
      return DataTables::of(Jurusan::query())
              // ->addColumn('kepunyaan_roles', function($datatb) {
              //   return DB::table('roles')->where('id','=',$datatb->kepunyaan)->get()->first()->namaRule;
              // })
              ->addColumn('action', function ($datatb) {
                  return
                   '<button data-id="'.$datatb->id.'" data-jurusan="'.$datatb->nama_jurusan.'" data-status="'.$datatb->status.'"   class="edit-modal btn btn-xs btn-info" type="submit"><i class="fa fa-edit"></i> Edit</button>'
                   .'<div style="padding-top:10px"></div>'
                  .'<button data-id="'.$datatb->id.'" data-nama_jurusan="'.$datatb->nama_jurusan.'" data-status="'.$datatb->status.'"  class="delete-modal btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>';
              })

              ->make(true);
    }

}
