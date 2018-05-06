@extends('layout.dashboard')

@section('script_custom')
<script type="text/javascript">
$('#executive_report').addClass('active');
    $( document ).ready(function() {
}); 
</script>
@endsection

@section('title')
Home Page
@endsection

@section('content')
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                  {{number_format($expense[0],0,",",".")}}
              </h3>

              <p>Pengeluaran bulan ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{url('dashboard/expense')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                  {{number_format($income[0],0,",",".")}}
              </h3>

              <p>Pemasukan bulan ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-archive"></i>
            </div>
            <a href="{{url('dashboard/income')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>101</h3>

              <p>Total siswa aktif</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
      </div>

      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Summary Presensi</h3>

              <div class="box-tools pull-right">
                {{-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> --}}
                </button>
                {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Kelas</th>
                    <th>Jumlah Siswa</th>
                    <th>Masuk</th>
                    <th>Izin</th>
                    <th>Sakit</th>
                    <th>Tanpa keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="#">I A</a></td>
                    <td>12</td>
                    <td>10</td>
                    <td>2</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td><a href="#">I B</a></td>
                    <td>15</td>
                    <td>14</td>
                    <td>0</td>
                    <td>1</td>
                    <td>0</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </div>
@endsection