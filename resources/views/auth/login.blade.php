@extends('layout.app')
@section('content')
<div class="container login">
	<h3 class="text-center">Login</h3>
	<form action="{{route('login_check')}}" method="post">
		@csrf
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
        <span class="text-danger">@error('email') {{$message}} @enderror</span>
        <span class="text-danger">@if(Session::has('fail')) {{Session::get('fail')}} @endif</span>
	    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="">
        <span class="text-danger">@if(Session::has('pasfail')) {{Session::get('pasfail')}} @endif</span>
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Submit</button>

	  <div class="mt-3">
	  	<p class="text-white">Don't have Account ? <a href="register" > Register</a></p>
	  </div>
	</form>
</div>
	
@endsection