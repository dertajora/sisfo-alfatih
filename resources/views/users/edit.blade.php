@extends('layout.dashboard')
@section('script_custom')
<script type="text/javascript">
$('#manajemen_users').addClass('active');
    $( document ).ready(function() {
}); 
</script>
@endsection

@section('title','Edit User')

@section('content')


<div class="row">
  <div class="col-md-6">
    <div class="box">
            
            <div class="box-body">
              {{-- start --}}
                    <form method="POST" action="{{URL::to('dashboard/users/update')}}">
                    {{ csrf_field() }} 
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                        <input type="hidden" name="user_id" class="form-control" id="name" value="{{$user->id}}">
                        
                      </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="{{$user->email}}">
                        
                      </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="number" name="phone" class="form-control" id="phone" value="{{$user->phone}}">
                        
                      </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Jabatan</label>
                        <select class="form-control" name="role" id="role">
                            <option value="">Pilih Jabatan</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}" <?php if ($role->id == $user->role_id)  echo "selected" ?>>{{$role->name}}</option>
                            @endforeach

                        </select>
                        
                      </div>
                    </div>
                    </div>
                    
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="submit" value="Update Data" class="btn btn-primary btn-flat">
                        </div>
                      </div>
                    </div>
                    
                   
                    
                  
                    
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer-->
            </div>
            
      
  </div> <!-- /col-md-12 -->
</div> <!-- /row -->
@endsection

@section('script_custom')
<script type="text/javascript">
$(document).ready(function() {
    $('#tableFullFeatures').DataTable();
});
</script>
@endsection