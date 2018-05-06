@extends('layout.dashboard')

@section('script_custom')
<script type="text/javascript">
$('#manajemen_pengeluaran').addClass('active');
    $( document ).ready(function() {
}); 
</script>
@endsection

@section('title')
Pengeluaran
@endsection

@section('content')
      <div class="row">
          <div class="col-md-12">
              <div class="pull-right">
                <a href="{{'expense/add'}}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> &nbsp&nbsp Tambah Pengeluaran</a>
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
                              <label>Jenis Pengeluaran</label>
                              <select class="form-control" name="type" id="type">
                                  <option>Pilih Jenis Pengeluaran</option>
                                  <option value="1">Gaji Guru & Pegawai</option>
                                  <option value="2">Listrik, Air, Transportasi & Operasional</option>
                                  <option value="3">Alat Tulis Kantor</option>
                                  <option value="4">Pengadaan Sekolah</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label>Periode</label>
                              <select class="form-control" name="period" id="period">
                                  <option>Pilih Periode</option>
                                  <option value="1">Mei 2018</option>
                              </select>
                            </div>
                          </div>
                        
                        
                          <div class="col-md-3">
                            <label>&nbsp</label>
                            <div class="form-group">
                               <input type="submit" value="Search" class="btn btn-warning btn-flat">
                               <input type="submit" value="Download" class="btn btn-primary btn-flat">
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
                      <th>Name</th>
                      <th>Nominal</th>
                      <th>Keterangan</th>
                      <th>Dibuat oleh</th>
                      <th>Tanggal</th>
                      <th>Jenis</th>
                      <th>Status</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($expenses as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->amount}}</td>
                            <td>{{$row->remarks}}</td>
                            <td>{{$row->created_by}}</td>
                            <td>{{$row->created_date}}</td>
                            <td>
                                <?php if ($row->type_id == 1): ?>
                                    <span class='label label-warning'>Gaji Staff</span>
                                <?php elseif($row->type_id == 2):?>
                                    <span class='label label-success'>Operasional</span>
                                <?php elseif($row->type_id == 3):?>
                                    <span class='label label-primary'>ATK</span>
                                <?php elseif($row->type_id == 4):?>
                                    <span class='label label-danger'>Pengadaan</span>
                                <?php endif ?>
                            </td>
                            <td>
                                <?php if ($row->status == 0): ?>
                                    <span class='label label-warning'>Pending</span>
                                <?php elseif($row->status == 1):?>
                                    <span class='label label-success'>Approved</span>
                                <?php elseif($row->status == 2):?>
                                    <span class='label label-danger'>Rejected</span>
                                <?php endif ?>
                            </td>
                            <td>
                              <?php if ($row->status == 0 && Auth::user()->role_id == 4): ?>
                                  <a href="{{url('dashboard/expense/approve/'.$row->id)}}" class="btn btn-sm btn-warning">Approve</a>  
                                  <a href="{{url('dashboard/expense/reject/'.$row->id)}}" class="btn btn-sm btn-danger">Reject</a>  
                              <?php else:?>
                                  -
                              <?php endif ?>
                              
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
                {{ $expenses->appends(Input::except('page'))->links() }}
              </ul>
            </div>
            </div> <!-- /box -->
        </div> <!-- /col-md-12 -->
      </div> <!-- /row -->
@endsection