@extends('admin.admin')
@section('master')
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
  button {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
  }
  button:hover {
    opacity: 0.8;
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
      <h3 class="box-title">Form Isian</h3>
    </div>
  <form role="form">
    <form id="regForm" action="">
    <div class="box-body">
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
    <label>No Urut</label>
      <p><input type="text" class="form-control" placeholder="012313"></p>

    <label>No Ujian</label>
      <p><input type="text" class="form-control" placeholder="AH12311"></p>

    <label>Nama Lengkap</label>
      <p><input type="text" class="form-control" placeholder="Jhon Doe"></p>

    <label>Tempat/Tanggal Lahir</label>
      <p><input type="text" class="form-control" placeholder="Jakarta/20 Juni 1998"></p>

    <label>Telpon Rumah</label>
      <p><input type="text" class="form-control" placeholder="02112341"></p>

    <label>No. HP Siswa</label>
      <p><input type="text" class="form-control" placeholder="08787121xxx"></p>

    <label>No. HP Orang Tua</label>
      <p><input type="text" class="form-control" placeholder="08787121xxx"></p>

    <label>Alamat Rumah Siswa</label>
      <p><input type="text" class="form-control" placeholder="Jl. Margonda Raya No.100, Pondok Cina"></p>

    <label>Nama Jalan & No Rumah</label>
      <p><input type="text" class="form-control" placeholder="Jl. Margonda Raya No.100, Pondok Cina"></p>

    <label>RT/RW</label>
      <p><input type="text" class="form-control" placeholder="02/12"></p>

    <label>Kelurahan</label>
      <p><input type="text" class="form-control" placeholder="Cinere"></p>

    <label>Kecamatan</label>
      <p><input type="text" class="form-control" placeholder="Limo"></p>

    <label>Kabupaten/Kota</label>
      <p><input type="text" class="form-control" placeholder="Depok"></p>

    <label>Kode Pos</label>
      <p><input type="text" class="form-control" placeholder="16514"></p>

    <label>Email Siswa</label>
      <p><input type="text" class="form-control" placeholder="someone@gmail.com"></p>

    <label>Status SMA/MA/SMK</label>
      <p><select class="form-control">
        <option>Negeri</option>
        <option>Swasta</option>
      </select></p>

    <label>Jurusan SMA/MA/SMK</label>
      <p><select class="form-control">
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
          <input type="text" class="form-control" id="bhsingx1" placeholder="">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="mtkx1" placeholder="">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="fisekx1" placeholder="">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label" >Biologi/Geografi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="bigeox1" placeholder="">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" onchange="jumlahkan()" id="kimsox1" placeholder="">
        </div>

    <label>Kelas 10 Semester 2</label><br>

    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bhsingx2" >
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mtkx2" >
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fisekx2" >
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bigeox2" >
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" onchange="jumlahkan()" id="kimsox2" >
    </div>

    <label>Kelas 11 Semester 1</label><br>


    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bhsingxi1" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mtkxi1" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fisekxi1" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bigeoxi1" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" onchange="jumlahkan()" id="kimsoxi1" >
    </div>



    <label>Kelas 11 Semester 2</label><br>


    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bhsingxi2" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mtkxi2" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fisekxi2" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bigeoxi2" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" onchange="jumlahkan()" id="kimsoxi2" >
    </div>



    <label>Kelas 12 Semester 1</label><br>


    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bhsingxii1" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mtkxii1" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fisekxii1" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bigeoxii1" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" onchange="jumlahkan()" id="kimsoxii1" >
    </div>


    <label>Total Nilai 5 semester</label>
    <output id="total" type="text" class="form-control"></output>


    <label>Rata - rata</label>
    <output id="rerata" type="text" class="form-control"></output>


    <label>Thn Lulus SMA/MA/SMK *</label>
    <input type="text" class="form-control" >

  </div>

<div class="tab">
    <label>Nama Contact Person *</label>
    <input type="text" class="form-control" >


    <label>Jabatan Contact Person *</label>
    <input type="text" class="form-control" >


    <label>No. HP/WA CP *</label>
    <input type="text" class="form-control" >


    <label>Email CP </label>
    <input type="text" class="form-control" >


    <label>Alamat Sekolah1 </label>
    <input type="text" class="form-control" >


    <label>Alamat Sekolah2 </label>
    <input type="text" class="form-control">


    <label>Kota SMA/SMK Berada *</label>
    <select class="form-control">
      <option>Jabodetabek</option>
      <option>Luar Jabodetabek</option>
    </select>


    <label>Telpon Sekolah </label>
    <input type="text" class="form-control" placeholder="">

    <label>Fax Sekolah</label>
    <input type="text" class="form-control" placeholder="">

    <label>Nilai TPA</label>
    <input type="text" class="form-control" placeholder="">

    <label>Nilai Bahasa Inggris </label>
    <input type="text" class="form-control" placeholder="">

    <label>Catatan</label>
    <input type="text" class="form-control" placeholder="">

    <label>Titipan dari Dosen/Staff</label>
    <input type="text" class="form-control" placeholder="">

    <label>Hubungan dengan Penitip </label>
    <input type="text" class="form-control" placeholder="">

    <label>Tanggal Seleksi </label>
    <input type="date" class="form-control" placeholder="">

    <label>Shift Ujian Seleksi</label>
    <input type="text" class="form-control" placeholder="">




    </div>


    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
  var total = parseInt(bhsingx1) + parseInt(mtkx1) + parseInt(fisekx1) + parseInt(bigeox1) + parseInt(kimsox1) +
  parseInt(bhsingx2) + parseInt(mtkx2) + parseInt(fisekx2) + parseInt(bigeox2) + parseInt(kimsox2) +
  parseInt(bhsingxi1) + parseInt(mtkxi1) + parseInt(fisekxi1) + parseInt(bigeoxi1) + parseInt(kimsoxi1) +
  parseInt(bhsingxi2) + parseInt(mtkxi2) + parseInt(fisekxi2) + parseInt(bigeoxi2) + parseInt(kimsoxi2) +
  parseInt(bhsingxii1) + parseInt(mtkxii1) + parseInt(fisekxii1) + parseInt(bigeoxii1) + parseInt(kimsoxii1);
  var rerata = parseInt(total)/25;
  document.getElementById('total').innerHTML = total;
  document.getElementById('rerata').innerHTML = rerata;
}
  </script>

  </body>
  </html>

@endsection
