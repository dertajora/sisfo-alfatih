@extends('layout.dashboard')
@section('script_custom')
<script type="text/javascript">
$('#manajemen_pengeluaran').addClass('active');
</script>
@endsection

@section('title','Tambah Pengeluaran')

@section('content')
@if (session('status'))
<div class="alert alert-warning">
	{{ session('status') }}
</div> <!-- /alert -->
@endif

<div class="row">
	<div class="col-md-6">
		<div class="box">
            
            <div class="box-body">
              {{-- start --}}
                    <form method="POST" action="{{URL::to('dashboard/expense/save')}}">
                    {{ csrf_field() }} 
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" id="name">
                        
                      </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="amount" class="form-control" id="amount">
                        
                      </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Jenis Pengeluaran</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">Pilih Jenis</option>
                            <option value="1">Gaji Guru & Pegawai</option>
                            <option value="2">Listrik, Air, Transportasi & Operasional</option>
                            <option value="3">Alat Tulis Kantor</option>
                            <option value="4">Pengadaan Sekolah</option>

                        </select>
                        
                      </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" name="remarks"></textarea>
                       
                      </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="submit" value="Tambah Pengeluaran" class="btn btn-primary btn-flat">
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