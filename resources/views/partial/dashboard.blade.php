@extends('admin.admin')
@section('dashboard')


<!-- Main content -->


  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Dashboard</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button> -->
      </div>
    </div>
    <div class="box-body">
      Total Data : {{DB::table('mhs')->count()}} <br>
      Total Data Daerah Jabodetabek : {{DB::table('mhs')->where('no_ujian','LIKE','D%')->count()}} <br>
      Total Data Daerah Luar Jabodetabek : {{DB::table('mhs')->where('no_ujian','LIKE','J%')->count()}}
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button class="edit-modal btn btn-sm btn-info" type="submit"><i class="fa fa-edit"></i> Generate Report</button>
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->



@endsection
