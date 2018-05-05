@extends('layout.dashboard')

@section('title')
Home Page
@endsection

@section('content')
     <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{url('/public')}}/dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Nama Murid</h3>

              <p class="text-muted text-center">Kelas I A</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Tingkat Kehadiran</b> <a class="pull-right">90%</a>
                </li>
                <li class="list-group-item">
                  <b>Sakit</b> <a class="pull-right">14</a>
                </li>
                <li class="list-group-item">
                  <b>Izin</b> <a class="pull-right">10</a>
                </li>
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          {{-- <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div> --}}
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Rapor</a></li>
              <li><a href="#timeline" data-toggle="tab">Aktivitas Studi</a></li>
              <li><a href="#settings" data-toggle="tab">Kontak Sekolah</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                
              </div>
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="timeline">
                <!-- Post -->
                
              </div>
              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Perihal</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Detail apa yang ingin disampaikan atau tanyakan"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
@endsection