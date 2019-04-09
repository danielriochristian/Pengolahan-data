
	header("Content-type: text/vnd-ms-excel");
  // header('Content-Type: application/csv; charset=utf-8');
  header('Content-Disposition: attachment; filename=data.xls');





  <table id="example" class="table table-striped table-bordered datatable">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nomor Urut</th>
            <th>Nomor Ujian</th>
            <th>Nama Lengkap</th>
            <th>Tempat</th>
            <th>Tanggal Lahir</th>
            <th colspan="10%">Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach($manage as $m)
      <td> {{$m -> id}}</td>
      <td> {{$m -> no_ujian}}</td>
    </tbody>
    @endforeach
  </table>
