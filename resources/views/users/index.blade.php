@extends('layout.dashboard')

@section('script_custom')
<script type="text/javascript">
$('#manajemen_users').addClass('active');
    $( document ).ready(function() {
}); 
</script>
@endsection




@section('title')
Manajemen User
@endsection

@section('content')
@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div> <!-- /alert -->
@endif
      <div class="row">
          <div class="col-md-12">
              <div class="pull-right">
                <a href="{{'users/add'}}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> &nbsp&nbsp Tambah User</a>
                <br><br>
              </div>
          </div>  
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Filter</h3>
                  </div>
                  <div class="box-body">
                    {{-- start --}}
                          <form method="GET">
                          
                          
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Jabatan</label>
                              <select class="form-control" name="role" id="role">
                                  <option>Pilih Jabatan</option>
                                  @foreach($roles as $role)
                                      <option value="{{$role->id}}">{{$role->name}}</option>
                                  @endforeach

                              </select>
                            </div>
                          </div>
                        
                        
                          <div class="col-md-2">
                            <label>&nbsp</label>
                            <div class="form-group">
                               <input type="submit" value="Search" class="btn btn-warning btn-flat">
                               </form>
                            </div>
                          </div>
                          
                  </div>
                  <!-- /.box-body -->
                  <!-- /.box-footer-->
                  </div>
                  
            <div class="box box-danger">
            <div class="box-body pad">
              <div class="table-responsive">
                <table id="tableFullFeatures" class="table table-border">

                  <thead>
                    <tr>
                      <th width="5%">ID</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>HP</th>
                      <th>Hak Akses</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($users as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->role_name}}</td>
                        <td>
                            <a href="{{url('dashboard/users/edit/'.$row->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{url('dashboard/users/delete/'.$row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach

                  </tbody>

                </table> <!-- /table -->
              </div> <!-- /table-responsive -->
            </div> <!-- /box-body -->
            <div class="box-footer clearfix">  
              <ul class="pagination pagination-sm no-margin pull-right">
                {{-- to include parameter searching in pagination --}}
                {{ $users->appends(Input::except('page'))->links() }}
              </ul>
            </div>
            </div> <!-- /box -->
        </div> <!-- /col-md-12 -->
      </div> <!-- /row -->
@endsection