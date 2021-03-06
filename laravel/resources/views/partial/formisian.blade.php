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

      <!-- <table id="example" class="table table-striped table-bordered" style="width:100%">
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
              <td> {{ $m -> nama_lengkap}}</td>

              <td> <a href="/formisian/{{$m -> id}}/edit"> Edit </a></td>
                   @endforeach
            </tbody>
          </table> -->

          <table id="example" class="table table-striped table-bordered datatable" style="width:100%">
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
          </table>

          <div id="myModal"class="modal fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            {{-- Form Delete Post --}}
            <div class="deleteContent">
            Are You sure want to delete <span class="title"></span>?
            <span class="hidden id"></span>
            </div>

            </div>
            <div class="modal-footer">

            <button type="button" class="btn actionBtn btn-sm" data-dismiss="modal">
            <span id="footer_action_button" class="glyphicon"></span>
            </button>

            <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">
            <span class="glyphicon glyphicon"></span>close
            </button>

            </div>
            </div>
            </div>
          </div>
            </div>
              </div>
                </div>







  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
  <script type="text/javascript">
  {{-- ajax Form Add Post--}}

  $(document).ready(function() {

    // DataTable
    $('.datatable').DataTable({
            "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Indonesian-Alternative.json"
        },
        processing: true,
        serverSide: true,
        ajax: '{{ route('mhs/json') }}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'no_urut', name: 'no_urut'},
            {data: 'no_ujian', name: 'no_ujian'},
            {data: 'nama_lengkap', name: 'nama_lengkap'},
            {data: 'tempat', name: 'tempat'},
            {data: 'tgl_lahir', name: 'tgl_lahir'},
            {data: 'action', name: 'action', orderable: false, searchable: false},

        ]
    });
    });
    // form Delete function
    $(document).on('click', '.delete-modal', function() {
    $('#footer_action_button').text(" Delete");
    $('#footer_action_button').removeClass('glyphicon-check');
    $('#footer_action_button').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete Post');
    $('.id').text($(this).data('id'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('.name').html($(this).data('name'));
    $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.delete', function(){
      $.ajax({
        type: 'POST',
        url: 'deleteForm',
        data: {
          "_token": "{{ csrf_token() }}",
          'id': $('.id').text()
        },
        success: function (data, status) {
                  $('.datatable').DataTable().ajax.reload(null, false);
              },
              error: function (request, status, error) {
                  console.log($("#id").val());
                  console.log(request.responseJSON);
                  $.each(request.responseJSON.errors, function( index, value ) {
                    alert( value );
                  });
              }
          });
      });
    </script>
  @endsection
