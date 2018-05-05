@extends('layout.form')

@if (session('status'))
@section('notification_message')
<script type="text/javascript">
swal("{{session('status')}}");
</script>
@endsection
@endif

@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('{{ URL::asset('public/form')}}/images/books.jpeg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="POST" action="{{url('login')}}" >
					<span class="login100-form-title p-b-59">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate="Email is required">
						<span class="label-input100">Email </span>
						<input class="input100" type="text" name="email" placeholder="Masukkan email ...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukkan password...">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
						{{-- <a href="{{URL::to('register')}}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Register
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a> --}}
					</div>
					{{ csrf_field() }} 
				</form>
			</div>
		</div>
	</div>
@endsection