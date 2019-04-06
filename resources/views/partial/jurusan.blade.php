@extends('admin.superadmin')
@section('jurusan')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Manage User</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
<div class="box-body">
  <div class="form-group">
  <div class="row">
          <div class="pull-right" style="padding-right:1%;">
            <button type="button"  href="#" class="create-modal btn btn-success btn-sm"> <i class="fa fa-plus"></i> Tambah</button>
          </div>
        </div>

          <br>

          <table id="example" class="table table-striped table-bordered datatable" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Jurusan</th>
                    <th>Status</th>
                    <th colspan="10%">Action</th>
                </tr>
            </thead>
          </table>
          </div>
          </div>
          {{-- {{$manage->links()}} --}}
          {{-- Modal Form Create Post --}}
        <div id="create" class="modal fade" role="dialog">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
          <form class="form-horizontal" role="form">
          <div class="form-group row add">

          <label class="control-label col-sm-2" for="jurusan">Jurusan</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="D3 - S1 Manajemen Keuangan (Semua Jurusan SMA/MA/SMK)" required>
          <p class="error text-center alert alert-danger hidden"></p>
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-sm-2" for="status">Status</label>
          <div class="col-sm-10">
          <select class="form-control" id="status" name="status" required>
          <option value="0">Inactive</option>
          <option value="1">Active</option>
          </select>
          <p class="error text-center alert alert-danger hidden"></p>
          </div>
          </div>


          <div class="form-group">
          </div>
          </form>
          </div>

          <div class="modal-footer">
          <button class="btn btn-success btn-sm" type="submit" id="add">
          <span class="glyphicon glyphicon-plus"></span>Save
          </button>
          <button class="btn btn-warning btn-sm" type="button" data-dismiss="modal">
          <span class="glyphicon glyphicon-remobe"></span>Close
          </button>
          </div>
          </div>
          </div>
        </div>

            {{-- Modal Form Edit and Delete Post --}}
        <div id="myModal"class="modal fade" role="dialog">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
          <form class="form-horizontal" role="modal">

          <div class="form-group">
          <label class="control-label col-sm-2"for="id">ID</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="fid" disabled>
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-sm-2"for="jurusan">Jurusan</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="j">
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-sm-2" for="roles">Status</label>
          <div class="col-sm-10">
          <select class="form-control" name="status" id="s">
            <option value="0">Inactive</option>
            <option value="1">Active</option>
          </select>
          </div>
          </div>

          <!-- <div class="form-group">
          <label class="control-label col-sm-2"for="password">Password</label>
          <div class="col-sm-10">
          <input type="password" class="form-control" id="ps"></textarea>
          </div>
          </div> -->
          </form>
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





    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
          ajax: '{{ route('jurusan/json') }}',
          columns: [
              {data: 'id', name: 'id'},
              {data: 'nama_jurusan', name: 'nama_jurusan'},
              {data: 'status', name: 'status'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
      });

      $(document).on('click','.create-modal', function() {
        $('#create').modal('show');
        $('.form-horizontal').show();
        $('.modal-title').text('Add Admin');
      });
      $("#add").click(function() {
        $.ajax({
          type: 'POST',
          url: 'addJurusan',
          data: {
            "_token": "{{ csrf_token() }}",
            'nama_jurusan': $('input[name=jurusan]').val(),
            'status': $('#status').val()
          },
          success: function (data, status) {
              $('#create').modal('hide');
              $("#jurusan").val(''),
              $("#status").val(''),
              $('.datatable').DataTable().ajax.reload(null, false);
          },
          error: function (request, status, error) {
              console.log(request.responseJSON);
              $.each(request.responseJSON.errors, function( index, value ) {
                alert( value );
              });
          }
      });
    });
    // function Edit POST
    $(document).on('click', '.edit-modal', function() {
    $('#footer_action_button').text("Update");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit Admin');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#fid').val($(this).data('id'));
    $('#j').val($(this).data('jurusan'));
    $('#s').val($(this).data('status'));
    $('#myModal').modal('show');
    });
// nama field
    $('.modal-footer').on('click', '.edit', function() {
      $.ajax({
        type: 'POST',
        url: 'editJurusan',
        data: {
    "_token": "{{ csrf_token() }}",
    'id': $("#fid").val(),
    'jurusan': $('#j').val(),
    'status': $('#s').val()
    // 'password': $('#ps').val()
  },
  success: function (data, status) {
      $('.datatable').DataTable().ajax.reload(null, false);
  },
  error: function (request, status, error) {
      console.log(request.responseJSON);
      $.each(request.responseJSON.errors, function( index, value ) {
        alert( value );
      });
  }
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
        url: 'deleteJurusan',
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
