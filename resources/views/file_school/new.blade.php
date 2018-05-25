@extends("layout.dashboard")

@section('script_custom')
<script type="text/javascript">
$('#upload_flashsale').addClass('active');
</script>
@endsection

@section('title', ' Tambah Berkas Sekolah')
@section('content')
	
	<div class="box box-primary">
  	<div class="box-header with-border">
    </div>
    
    <form action="{{url('dashboard/file_school/save')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }} 
	    <div class="box-body">
	    	    <div class="form-group">
                <label for="exampleInputFile">Berkas</label>
                <input type="file" name="attachment" id="exampleInputFile">
            </div>
            <div class="form-group">
              <label>Jenis</label>
              <select class="form-control" name="sub_category_id" id="sub_category_id">
                  <option>Pilih Tipe</option>
                  @foreach($subcategories as $row)
                      <option value="{{$row->id}}">{{$row->subcategory}}</option>
                  @endforeach

              </select>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Keterangan</label>
                <textarea name="remarks" class="form-control rows=3"></textarea>
            </div>
	   	</div>
	    <div class="box-footer">
	    	<input type="submit" class="btn btn-primary btn-flat" value="Upload">
	    	<a href="{{url('dashboard/file_school')}}" class="btn btn-danger btn-flat">Cancel</a>
	    </div>
    </form>

  </div>
  

@endsection
