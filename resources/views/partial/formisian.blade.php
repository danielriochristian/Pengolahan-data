@extends('admin.admin')
@section('formisian')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Manage Data</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
<div class="box-body">
  <div class="form-group">
  <div class="row">
          <!-- <div class="pull-right" style="padding-right:1%;">
            <button type="button"  href="#" class="create-modal btn btn-success btn-sm"> <i class="fa fa-plus"></i> Tambah</button>
          </div> -->
        </div>

          <br>

          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th colspan="10%">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($manage as $m)
              <td> {{ $m -> id}}</td>
              <td> {{ $m -> nama}}</td>
              <td> {{ $m -> nilai}}</td>
              @endforeach
            </tbody>
          </table>
          </div>
          </div>

@endsection
