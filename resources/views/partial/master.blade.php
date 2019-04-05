@extends('admin.admin')
@section('master')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Form Isian</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form">
    <div class="box-body">
      <div class="form-group">
        <label>No Urut</label>
        <input type="text" class="form-control" placeholder="012313">
      </div>
      <div class="form-group">
        <label>No Ujian</label>
        <input type="text" class="form-control" placeholder="AH12311">
      </div>
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" placeholder="Jhon Doe">
      </div>
      <div class="form-group">
        <label>Tempat/Tgl Lahir</label>
        <input type="text" class="form-control" placeholder="Jakarta/20 Juni 1998">
      </div>
      <div class="form-group">
        <label>Telpon Rumah</label>
        <input type="text" class="form-control" placeholder="02112341">
      </div>
      <div class="form-group">
        <label>No. HP Siswa *</label>
        <input type="text" class="form-control" placeholder="08787121xxx">
      </div>
      <div class="form-group">
        <label>No. HP Orang Tua</label>
        <input type="text" class="form-control" placeholder="08787121xxx">
      </div>
      <div class="form-group">
        <label>Alamat Rumah Siswa</label>
        <textarea placeholder="Jl. Margonda Raya No.100, Pondok Cina" class="form-control" > </textarea>
      </div>
      <div class="form-group">
        <label>Nama Jalan & No Rumah</label>
        <input type="text" class="form-control" placeholder="Jl. Margonda Raya No.100, Pondok Cina">
      </div>
      <div class="form-group">
        <label>RT/RW</label>
        <input type="text" class="form-control" placeholder="02/12">
      </div>
      <div class="form-group">
        <label>Kelurahan</label>
        <input type="text" class="form-control" placeholder="Beji">
      </div>
      <div class="form-group">
        <label>Kecamatan</label>
        <input type="text" class="form-control" placeholder="Kota Depok">
      </div>
      <div class="form-group">
        <label>Kabupaten</label>
        <input type="text" class="form-control" placeholder="Depok">
      </div>
      <div class="form-group">
        <label>Kota</label>
        <input type="text" class="form-control" placeholder="Kota Depok">
      </div>
      <div class="form-group">
        <label>Kode Pos</label>
        <input type="text" class="form-control" placeholder="16424">
      </div>
      <div class="form-group">
        <label>Email Siswa</label>
        <input type="text" class="form-control" placeholder="someone@gmail.com">
      </div>
      <div class="form-group">
        <label>Status SMA/MA/SMK</label>
        <select class="form-control">
          <option>Negeri</option>
          <option>Swasta</option>
        </select>
      </div>
      <div class="form-group">
        <label>Jurusan SMA/MA/SMK</label>
        <select class="form-control">
          <option>IPA</option>
          <option>IPS</option>
          <option>Bahasa</option>
          <option>Teknik</option>
          <option>Non Teknik</option>
          <option>Lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label>Nilai Siswa</label> <br>
        <label>Kelas 10 Semester 1</label>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="">
        </div>
      </div>
      <div class="form-group">

        <label>Kelas 10 Semester 2</label>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">

        <label>Kelas 11 Semester 1</label>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">

        <label>Kelas 11 Semester 2</label>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">

        <label>Kelas 12 Semester 1</label>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label>Total Nilai 5 semester</label>
        <input type="text" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <label>Rata - rata</label>
        <input type="text" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <label>Thn Lulus SMA/MA/SMK *</label>
        <input type="text" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <label>Nama Contact Person *</label>
        <input type="text" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <label>Jabatan Contact Person *</label>
        <input type="text" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <label>No. HP/WA CP *</label>
        <input type="text" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <label>Email CP </label>
        <input type="text" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <label>Alamat Sekolah1 </label>
        <input type="text" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <label>Alamat Sekolah2 </label>
        <input type="text" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <label>Kota SMA/SMK Berada *</label>
        <select class="form-control">
          <option>Jabodetabek</option>
          <option>Luar Jabodetabek</option>
        </select>
      </div>
      <div class="form-group">
        <label>Telpon Sekolah </label>
        <input type="text" class="form-control" placeholder="Password">
      </div>




    </div>


    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  <!-- <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Bahasa Inggris</label>

        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      </div>
    </form> -->
</div>

@endsection
