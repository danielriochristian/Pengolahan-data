@extends('admin.admin')
@section('editmhs')
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
  #regForm {
    font-family: Raleway;
  }
  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }
  /* Hide all steps by default: */
  .tab {
    display: none;
  }

  #prevBtn {
    background-color: #bbbbbb;
  }
  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }
  .step.active {
    opacity: 1;
  }
  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #4CAF50;
  }
  </style>
  <body>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Isian</h3>
    </div>
  <form role="form">
    <form id="regForm" action="">
    <div class="box-body">
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
    <label>No Urut</label>
      <p><input type="text" name="no_urut"class="form-control" placeholder="012313" value="{{$manage -> no_urut}}"></p>

    <label>No Ujian</label>
      <p><input type="text" name="no_ujian"class="form-control" placeholder="AH12311" value="{{$manage -> no_ujian}}"></p>

    <label>Nama Lengkap</label>
      <p><input type="text" name="nama_lengkap" style="text-transform:uppercase" class="form-control" placeholder="Jhon Doe" value="{{$manage -> nama_lengkap}}"></p>


    <label>Tempat Lahir</label>
      <p><input type="text" name="tempat" class="form-control" placeholder="Jakarta" value="{{$manage -> tempat}}"></p>


    <label>Tanggal Lahir</label>
      <p><input type="date" name="tgl_lahir"class="form-control" placeholder="17 November 1998" value="{{$manage -> tgl_lahir}}"></p>

    <label>Telpon Rumah</label>
      <p><input type="text" name="telp_rumah"class="form-control" placeholder="02112341" value="{{$manage -> telp_rumah}}"></p>

    <label>No. HP Siswa</label>
      <p><input type="text" name="no_hp_siswa"class="form-control" placeholder="08787121xxx" value="{{$manage -> no_hp_siswa}}"></p>

    <label>No. HP Orang Tua</label>
      <p><input type="text" name="no_hp_orangtua"class="form-control" placeholder="08787121xxx" value="{{$manage -> no_hp_orangtua}}"></p>

    <label>Alamat Rumah Siswa</label>
      <p><input type="text" name="alamat"style="text-transform:uppercase" class="form-control" placeholder="Jl. Margonda Raya No.100, Pondok Cina" value="{{$manage -> alamat}}"></p>

    <label>Nama Jalan & No Rumah</label>
      <p><input type="text" name="nm_jln"class="form-control" placeholder="Jl. Margonda Raya No.100, Pondok Cina" value="{{$manage -> nm_jln}}"></p>

    <label>RT/RW</label>
      <p><input type="text" name="rt/rw"class="form-control" placeholder="02/12" value="{{$manage -> rt/rw}}"></p>

    <label>Kelurahan</label>
      <p><input type="text" name="kelurahan"class="form-control" placeholder="Cinere" value="{{$manage -> kelurahan}}"></p>

    <label>Kecamatan</label>
      <p><input type="text" name="kecamatan"class="form-control" placeholder="Limo" value="{{$manage -> kecamatan}}"></p>

    <label>Kabupaten/Kota</label>
      <p><input type="text" name="kab/kota"class="form-control" placeholder="Depok" value="{{$manage -> kab/kota}}"></p>

    <label>Kode Pos</label>
      <p><input type="text" name="kode_pos"class="form-control" placeholder="16514" value="{{$manage -> kode_pos}}"></p>

    <label>Email Siswa</label>
      <p><input type="text" name="email"class="form-control" placeholder="someone@gmail.com" value="{{$manage -> email}}"></p>

    <label>Status SMA/MA/SMK</label>
      <p><select class="form-control" name="status" value="{{$manage -> status}}">
        <option>Negeri</option>
        <option>Swasta</option>
      </select></p>

    <label>Jurusan SMA/MA/SMK</label>
      <p><select class="form-control" name="jurursan" value="{{$manage -> jurusan}}">
        <option>IPA</option>
        <option>IPS</option>
        <option>Bahasa</option>
        <option>Teknik</option>
        <option>Non Teknik</option>
        <option>Lainnya</option>
      </select></p>
    </div>
    <div class="tab">
      <h4>Nilai Siswa</h4>
      <label>Kelas 10 Semester 1</label><br>

        <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
        <div class="col-sm-10">
          <input type="text" name="bingx1"class="form-control" id="bhsingx1" placeholder="" value="{{$manage -> bingx1}}">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
        <div class="col-sm-10">
          <input type="text" name="mtkx1"class="form-control" id="mtkx1" placeholder="" value="{{$manage -> mtkx1}}">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
        <div class="col-sm-10">
          <input type="text" name="fisika_ekonomix1" class="form-control" id="fisekx1" placeholder="" value="{{$manage -> fisika_ekonomix1}}">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label" >Biologi/Geografi</label>
        <div class="col-sm-10">
          <input type="text" name="biologi_geografix1"class="form-control" id="bigeox1" placeholder="" value="{{$manage -> biologi_geografix1}}">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
        <div class="col-sm-10">
          <input type="text" name="kimia_sosiologix1"class="form-control" onchange="jumlahkan()" id="kimsox1" placeholder="" value="{{$manage -> kimia_sosiologix1}}">
        </div>

    <label>Kelas 10 Semester 2</label><br>

    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="text" name="bingx2" class="form-control" id="bhsingx2" value="{{$manage -> bingx2}}">
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="text"name="mtkx2" class="form-control" id="mtkx2" value="{{$manage -> mtkx2}}">
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="text" name="fisika_ekonomix2"class="form-control" id="fisekx2" value="{{$manage -> fisika_ekonomix2}}">
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="text" name="biologi_geografix2" class="form-control" id="bigeox2" value="{{$manage -> biologi_geografix2}}">
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="text" name="kimia_sosiologix2" class="form-control" onchange="jumlahkan()" id="kimsox2" value="{{$manage -> kimia_sosiologix2}}">
    </div>

    <label>Kelas 11 Semester 1</label><br>


    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="text" name="bingxi1"class="form-control" id="bhsingxi1" value="{{$manage -> bingxi1}}">
    </div>

    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="text" name="mtkxi1"class="form-control" id="mtkxi1" value="{{$manage -> mtkxi1}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="text" name="fisika_ekonomixi1" class="form-control" id="fisekxi1" value="{{$manage -> fisika_ekonomixi1}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="text" name="biologi_geografixi1" class="form-control" id="bigeoxi1" value="{{$manage -> biologi_geografixi1}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="text" name="kimia_sosiologixi1" class="form-control" onchange="jumlahkan()" id="kimsoxi1" value="{{$manage -> kimia_sosiologixi1}}">
    </div>



    <label>Kelas 11 Semester 2</label><br>


    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="text" name="bingxi2"class="form-control" id="bhsingxi2" value="{{$manage -> bingxi2}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="text" name="mtkxi2" class="form-control" id="mtkxi2" value="{{$manage -> mtkxi2}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="text" name="fisika_ekonomixi2"class="form-control" id="fisekxi2" value="{{$manage -> fisika_ekonomixi2}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="text" name="biologi_geografixi2"class="form-control" id="bigeoxi2" value="{{$manage -> biologi_geografixi2}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="text" name="kimia_sosiologixi2" class="form-control" onchange="jumlahkan()" id="kimsoxi2" value="{{$manage -> kimia_sosiologixi2}}">
    </div>



    <label>Kelas 12 Semester 1</label><br>


    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="text" name="bingxii2"class="form-control" id="bhsingxii1" value="{{$manage -> bingxi2}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="text" name="mtkxii2"class="form-control" id="mtkxii1" value="{{$manage -> mtkxii2}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="text" name="fisika_ekonomixii2" class="form-control" id="fisekxii1" value="{{$manage -> fisika_ekonomixii2}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="text" name="biologi_geografixii2" class="form-control" id="bigeoxii1" value="{{$manage -> biologi_geografixii2}}">
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="text" name="kimia_sosiologixii2"class="form-control" onchange="jumlahkan()" id="kimsoxii1" value="{{$manage -> kimia_sosiologixii2}}">
    </div>


    <label>Total Nilai 5 semester</label>
    <output id="total" type="text" class="form-control"></output>


    <label>Rata - rata</label>
    <output id="rerata" type="text" class="form-control"></output>




  </div>

<div class="tab">
    <label>Thn Lulus SMA/MA/SMK *</label>
    <input type="text" name="thn_lulus" class="form-control" value="{{$manage -> thn_lulus}}">

    <label>Nama Contact Person *</label>
    <input type="text" name="nama_cp"class="form-control" value="{{$manage -> nama_cp}}">


    <label>Jabatan Contact Person *</label>
    <input type="text" name="jabatan_cp" class="form-control" value="{{$manage -> jabatan_cp}}">


    <label>No. HP/WA CP *</label>
    <input type="text" name="nohp_cp" class="form-control" value="{{$manage -> nohp_cp}}">


    <label>Email CP </label>
    <input type="text" name="email_cp"class="form-control" value="{{$manage -> email_cp}}">


    <label>Alamat Sekolah1 </label>
    <input type="text" name="alamat1"class="form-control" value="{{$manage -> alamat1}}">


    <label>Alamat Sekolah2 </label>
    <input type="text" name="alamat2"class="form-control" value="{{$manage -> alamat2}}">


    <label>Kota SMA/SMK Berada *</label>
    <select class="form-control" name="kota_sekolah" value="{{$manage -> kota_sekolah}}">
      <option>Jabodetabek</option>
      <option>Luar Jabodetabek</option>
    </select>


    <label>Telpon Sekolah </label>
    <input type="text" name="telp_sekolah"class="form-control" placeholder="" value="{{$manage -> telp_sekolah}}">

    <label>Fax Sekolah</label>
    <input type="text" name="fax_sekolah" class="form-control" placeholder="" value="{{$manage -> fax_sekolah}}">

    <label>Nilai TPA</label>
    <input type="text" name="nilai_tpa" class="form-control" placeholder="" value="{{$manage -> nilai_tpa}}">

    <label>Nilai Bahasa Inggris </label>
    <input type="text" name="nilai_bing"class="form-control" placeholder="" value="{{$manage -> nilai_bing}}">

    <label>Catatan</label>
    <input type="text" name="catatan"class="form-control" placeholder="" value="{{$manage -> catatan}}">

    <label>Titipan dari Dosen/Staff</label>
    <input type="text" name="titipandosen"class="form-control" placeholder="" value="{{$manage -> titipandosen}}">

    <label>Hubungan dengan Penitip </label>
    <input type="text" name="hubungan"class="form-control" placeholder="" value="{{$manage -> hubungan}}">

    <label>Tanggal Seleksi </label>
    <input type="date" name="tgl_seleksi" class="form-control" placeholder="" value="{{$manage -> tgl_seleksi}}">

    <label>Shift Ujian Seleksi</label>
    <input type="text" name="shift_ujian"class="form-control" placeholder="" value="{{$manage -> shift_ujian}}">

    <h4 class="box-title">Mengajukan Beasiswa Penuh UG</h4>

    <label>Pilihan 1</label>
    <select name="jurusan" id="jurusan" class="form-control" value="{{$manage -> pilihan1}}">
      @foreach ($jurusan as $jur)
        <option value="{{$jur -> id}}">{{$jur -> nama_jurusan}}</option>
      @endforeach
    </select>


    <label>Pilihan 2</label>
    <select name="jurusan" id="jurusan" class="form-control" value="{{$manage -> pilihan2}}">
      @foreach ($jurusan as $jur)
        <option value="{{$jur -> id}}">{{$jur -> nama_jurusan}}</option>
      @endforeach
    </select>



    </div>


    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" class="btn btn-sm btn-default btn-flat pull-left" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" class="btn btn-sm btn-success btn-flat pull-right" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>

    </div>
  </form>

  <script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab
  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }
  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }
  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }
  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
  function jumlahkan(){
  var bhsingx1 = document.getElementById('bhsingx1').value;
  var mtkx1 = document.getElementById('mtkx1').value;
  var fisekx1 = document.getElementById('fisekx1').value;
  var bigeox1 = document.getElementById('bigeox1').value;
  var kimsox1 = document.getElementById('kimsox1').value;
  var bhsingx2 = document.getElementById('bhsingx2').value;
  var mtkx2 = document.getElementById('mtkx2').value;
  var fisekx2 = document.getElementById('fisekx2').value;
  var bigeox2 = document.getElementById('bigeox2').value;
  var kimsox2 = document.getElementById('kimsox2').value;
  var bhsingxi1 = document.getElementById('bhsingxi1').value;
  var mtkxi1 = document.getElementById('mtkxi1').value;
  var fisekxi1 = document.getElementById('fisekxi1').value;
  var bigeoxi1 = document.getElementById('bigeoxi1').value;
  var kimsoxi1 = document.getElementById('kimsoxi1').value;
  var bhsingxi2 = document.getElementById('bhsingxi2').value;
  var mtkxi2 = document.getElementById('mtkxi2').value;
  var fisekxi2 = document.getElementById('fisekxi2').value;
  var bigeoxi2 = document.getElementById('bigeoxi2').value;
  var kimsoxi2 = document.getElementById('kimsoxi2').value;
  var bhsingxii1 = document.getElementById('bhsingxii1').value;
  var mtkxii1 = document.getElementById('mtkxii1').value;
  var fisekxii1 = document.getElementById('fisekxii1').value;
  var bigeoxii1 = document.getElementById('bigeoxii1').value;
  var kimsoxii1 = document.getElementById('kimsoxii1').value;
  var total = parseFloat(bhsingx1) + parseFloat(mtkx1) + parseFloat(fisekx1) + parseFloat(bigeox1) + parseFloat(kimsox1) +
  parseFloat(bhsingx2) + parseFloat(mtkx2) + parseFloat(fisekx2) + parseFloat(bigeox2) + parseFloat(kimsox2) +
  parseFloat(bhsingxi1) + parseFloat(mtkxi1) + parseFloat(fisekxi1) + parseFloat(bigeoxi1) + parseFloat(kimsoxi1) +
  parseFloat(bhsingxi2) + parseFloat(mtkxi2) + parseFloat(fisekxi2) + parseFloat(bigeoxi2) + parseFloat(kimsoxi2) +
  parseFloat(bhsingxii1) + parseFloat(mtkxii1) + parseFloat(fisekxii1) + parseFloat(bigeoxii1) + parseFloat(kimsoxii1);
  var rerata = parseFloat(total)/25;
  document.getElementById('total').innerHTML = total;
  document.getElementById('rerata').innerHTML = rerata;
}
  </script>

  </body>
  </html>

@endsection
