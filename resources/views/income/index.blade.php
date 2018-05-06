@extends('layout.dashboard')

@section('script_custom')
<script type="text/javascript">
$('#manajemen_pemasukan').addClass('active');
    $( document ).ready(function() {
}); 
</script>
@endsection

@section('title')
Pemasukan
@endsection

@section('content')
      <div class="row">
          <div class="col-md-12">
              <div class="pull-right">
                <a href="{{'income/add'}}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> &nbsp&nbsp Tambah Pemasukan</a>
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
                              <label>Jenis Pemasukan</label>
                              <select class="form-control" name="type" id="type">
                                  <option>Pilih Jenis Pemasukan</option>
                                  <option value="1">Uang Masuk Siswa</option>
                                  <option value="2">SPP Siswa/Bulan</option>
                                  <option value="3">Badan Usaha Milik Yayasan</option>
                                  <option value="4">Pendapatan Lain</option>

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
                      <th>Nama</th>
                      <th>Jumlah</th>
                      <th>Keterangan</th>
                      <th>Dibuat Oleh</th>
                      <th>Tanggal</th>
                      <!-- <th>Aksi</th> -->
                      
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($incomes  as $row)
                      <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->amount}}</td>
                        <td>{{$row->remarks}}</td>
                        <td>{{$row->created_by}}</td>
                        <td>{{$row->created_at}}</td>
                        <!-- <td> -->
                          <!-- <a href="{{url('dashboard/income/edit/'.$row->id)}}" class="btn btn-sm btn-warning">Edit</a> -->
                        <!-- </td> -->
                      </tr>
                    @endforeach
                  </tbody>
                </table> <!-- /table -->
              </div> <!-- /table-responsive -->
            </div> <!-- /box-body -->
            <div class="box-footer clearfix">  
              <ul class="pagination pagination-sm no-margin pull-right">
                {{-- to include parameter searching in pagination --}}
                {{ $incomes->appends(Input::except('page'))->links() }}
              </ul>
            </div>
            </div> <!-- /box -->
        </div> <!-- /col-md-12 -->
      </div> <!-- /row -->
@endsection