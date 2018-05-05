@extends('layout.dashboard')

@section('title')
Pengeluaran
@endsection

@section('content')
      <div class="row">
          <div class="col-md-12">
              <div class="pull-right">
                <a href="{{'manage_employees/add'}}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> &nbsp&nbsp Tambah Pengeluaran</a>
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
                              <select class="form-control" name="period" id="period">
                                  <option value="">Gaji Guru & Pegawai</option>
                                  <option value="2">Listrik, Air, Transportasi & Operasional</option>
                                  <option value="3">Alat Tulis Kantor</option>
                                  <option value="4">Pengadaan Sekolah</option>

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
                      <th>Name</th>
                      <th>Nominal</th>
                      <th>Keterangan</th>
                      <th>Dibuat oleh</th>
                      <th>Waktu pembuatan</th>
                      
                      <th>Status</th>
                      
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>Alat Tulis Kantor</td>
                        <td>500000</td>
                        <td>Pembelian papan tulis</td>
                        <td>Demas</td>
                        <td>2018-02-14 09:10</td>
                        <th><span class='label label-warning'>Ditolak</span></th>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alat Tulis Kantor</td>
                        <td>100000</td>
                        <td>Pembelian Spidol dan Buku</td>
                        <td>Demas</td>
                        <td>2018-02-14 09:10</td>
                        <th><span class='label label-success'>Disetujui</span></th>
                    </tr>
                      
                    
                    

                  </tbody>

                  

                </table> <!-- /table -->
              </div> <!-- /table-responsive -->
            </div> <!-- /box-body -->
            <div class="box-footer clearfix">  
              <ul class="pagination pagination-sm no-margin pull-right">
                {{-- to include parameter searching in pagination --}}
                
              </ul>
            </div>
            </div> <!-- /box -->
        </div> <!-- /col-md-12 -->
      </div> <!-- /row -->
@endsection