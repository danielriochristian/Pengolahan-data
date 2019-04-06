@extends('admin.admin')
@section('pilihan')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Pilihan Beasiswa</h3>
    </div>
  <form role="form">
    <div class="box-body">
    <div class="form-group">
    <label for="exampleFormControlSelect1">Pilihan 1</label>
    <select name="jurusan" id="jurusan" class="form-control">
        @foreach ($jurusan as $jur)
          <option value="{{$jur -> id}}">{{$jur -> nama_jurusan}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
  <label for="exampleFormControlSelect2">Pilihan 2</label>
  <select name="jurusan" id="jurusan" class="form-control">
      @foreach ($jurusan as $jur)
        <option value="{{$jur -> id}}">{{$jur -> nama_jurusan}}</option>
      @endforeach
  </select>
</div>
@endsection
