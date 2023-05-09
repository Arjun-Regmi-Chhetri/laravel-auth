@extends('layout.app')
@section('content')
<div class="top">
	@if(Session::has('success'))
	<div class="alert alert-success">
		{{Session::get('success')}}
	</div>
	@endif
	@if(Session::has('fail'))
	<div class="alert alert-danger">
		{{Session::get('fail')}}
	</div>
	@endif
</div>
<div class="container login">
	<h3 class="text-center">Register</h3>
	<form action="{{route('store')}}" method="post">
		@csrf
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name"  name="name" value="{{old('name')}}">
			<span class="text-danger">@error('name') {{$message}} @enderror</span>
          </div>
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
		<span class="text-danger">@error('email') {{$message}} @enderror</span>
	    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="">
		<span class="text-danger">@error('password') {{$message}} @enderror</span>
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Submit</button>

	  <div class="mt-3">
	  	<p class="text-white">Don't have Account ? <a href="/" >Login</a></p>
	  </div>
	</form>
</div>
	
@endsection