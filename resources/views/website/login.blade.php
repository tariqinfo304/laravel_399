@extends("website.layout.layout")

@section("title","Login")

@section("nav")
@endsection

@section("body_content")

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->

			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

			<div class="row">
				<form method="POST" action="{{ URL('login') }}">
					@csrf()
					<div class="form-group">
					    <label for="name">Username</label>
					    <input type="text" class="form-control" name="username" aria-describedby="username"

					    value="{{ old('username')}}"

					     placeholder="Enter username">

					     
					    @error('username')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
					    <label for="price">Password</label>
					    <input type="password" class="form-control" name="password" aria-describedby="password"
					     placeholder="Enter Password"
					     >
					    @error('password')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
					</div>
					 
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->


@endsection