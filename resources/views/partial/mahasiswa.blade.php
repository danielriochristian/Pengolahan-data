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
    <form id="regForm" action="/action_page.php">
    <div class="box-body">
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
    <label>No Urut</label>
      <p><input type="text" class="form-control" placeholder="012313"></p>

    <label>No Ujian</label>
      <p><input type="text" class="form-control" placeholder="AH12311"></p>

    <label>Nama Lengkap</label>
      <p><input type="text" class="form-control" placeholder="Jhon Tor"></p>

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
          <input type="email" class="form-control" id="inputEmail3" placeholder="">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="">
        </div>
        <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="">
        </div>

    <label>Kelas 10 Semester 2</label><br>

    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>

    <label>Kelas 11 Semester 1</label><br>


    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>



    <label>Kelas 11 Semester 2</label><br>


    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>



    <label>Kelas 12 Semester 1</label><br>


    <label for="inputEmail3" class="col-sm-2 control-label">Bhs Inggris</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Matematika</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Fisika/Ekonomi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Biologi/Geografi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label for="inputEmail3" class="col-sm-2 control-label">Kimia/Sosiologi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>


    <label>Total Nilai 5 semester</label>
    <input type="text" class="form-control" >


    <label>Rata - rata</label>
    <input type="text" class="form-control" >


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
  </script>

  </body>
  </html>

@endsection
