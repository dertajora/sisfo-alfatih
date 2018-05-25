@extends("layout.dashboard")

@section('script_custom')
<script type="text/javascript">
$('#upload_flashsale').addClass('active');

$( document ).ready(function() {
   
    @if (!empty($_GET['upload_date']))
        $('#upload_date').datepicker('setDate', "{{$_GET['upload_date']}}");
    @endif 
});

//Date picker
$('#upload_date').datepicker({
  format: 'yyyy-mm-dd',
  autoclose: true
})
</script>
@endsection

@section('title', ' Upload Berkas Sekolah')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
          <a href="{{'upload_file/new'}}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> &nbsp&nbsp Upload Berkas Baru</a>
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
                          <label>Jenis</label>
                          <select class="form-control" name="sub_category_id" id="sub_category_id">
                              <option>Pilih Tipe</option>
                              @foreach($subcategories as $row)
                                  <option value="{{$row->id}}">{{$row->subcategory}}</option>
                              @endforeach

                          </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                    
	                	<div class="form-group">
	                        <label>Upload Date</label>

	                        <div class="input-group date">
	                          <div class="input-group-addon">
	                            <i class="fa fa-calendar"></i>
	                          </div>
	                          <input type="text" class="form-control pull-right" id="upload_date" name="upload_date">
	                        </div>
	                        <!-- /.input group -->
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
		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<div class="row">

	<div class="col-xs-12">
		<div class="box">
			
			
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>File Name</th>
							<th>Type</th>
							<th>Remarks</th>
							<th>Upload By</th>
							<th>Uploaded At</th>
							
						</tr>
					</thead>
					<tbody>
						@if(count($files) > 0)
							@foreach($files as $row)
								<tr>
									<td>{{$row->id}}</td>
									<td><a href="{{url('public/upload_files/'.$row->file_name)}}" download>{{$row->original_name}}</a></td>
									<td>{{$row->subcategory}}</td>
									<td>
										@if (empty($row->remarks)) 
											-
										@else
											{{$row->remarks}}
										@endif
									</td>
									<td>{{$row->upload_by}}</td>
									<td>{{$row->created_at}}</td>
								</tr>
							@endforeach
						@else
							<tr>
								<td colspan="6" class="text-center">No Data Found</td>
							</tr>
						@endif
					</tbody>
				</table>
			</div>
			<div class="box-footer clearfix">
              
	          	<ul class="pagination pagination-sm no-margin pull-right">
	            {{-- to include parameter searching in pagination --}}
	            {{ $files->appends(Input::except('page'))->links() }}
	                
	          	</ul>
	        </div>
		</div>
		
	</div>
</div>

@endsection
