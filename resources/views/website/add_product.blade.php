@extends("website.layout.layout")

@section("title","Add Product")

@section("nav")
@endsection

@section("body_content")

	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb-tree">
						<li><a href="#">Home</a></li>
						<li class="active"><a href="#">Add Product</a></li>
					</ul>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BREADCRUMB -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<p id="msg"></p>
				@if(!empty($obj->id))

					<form method="POST" action="{{ URL('product/'.$obj->id) }}">

				@else

					<form id="add_product" method="POST" action="{{ URL('product') }}">

				@endif

					@csrf()


					@if(!empty($is_deleted))

						@method('DELETE')

						@php
							$disable="disabled"
						@endphp

					@endif

					@if(!empty($obj->id) && empty($is_deleted))

						@method('PUT')
						<input type="hidden" value="{{ $obj->id }}" name="id"/>

					@endif

					 <div class="form-group">
					    <label for="name">Product Name</label>
					    <input type="text" class="form-control" name="name" aria-describedby="name"

					    {{ $disable ?? "" }}
					    value="{{ $obj->name ?? '' }}"
					     placeholder="Enter Name">

					     @error("name")

					     	<p class="alert alert-danger"> {{ $message }}</p>
					     @enderror

					     <p id="name_error"></p>
					  </div>
					 <div class="form-group">
					    <label for="price">Product Price</label>
					    <input type="number" class="form-control" name="price" aria-describedby="name"

					     {{ $disable ?? "" }}

					    value="{{ $obj->price ?? '' }}"
					     placeholder="Enter Price">

					    @error("price")

					     	<p class="alert alert-danger"> {{ $message }}</p>
					     @enderror
					  </div>
					  <div class="form-group">
					    <label for="quantity">Product Quantity</label>
					    <input type="number" class="form-control" name="quantity" aria-describedby="quantity"

					     {{ $disable ?? "" }}
					     
					    value="{{ $obj->quantity ?? '' }}"
					     placeholder="Enter Quantity">


					     @error("quantity")

					     	<p class="alert alert-danger"> {{ $message }}</p>
					     @enderror
					  </div>

					  @if(!empty($obj->id) && empty($is_deleted))

					  	 <button type="submit" class="btn btn-primary">Update</button>
					  @elseif(!empty($is_deleted))

					  	 <button type="submit" class="btn btn-primary">Delete</button>

					  @else

					  		<button type="submit" class="btn btn-primary">Save</button>

					  @endif
					 
				</form>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->


	<script type="text/javascript">
		

		$("#add_product").submit(function(e){

			e.preventDefault();
			
			let form = $(this).serialize();
			$.ajax({
			
			  	method: "POST",
			  	url: "{{ URL('product') }}",
			  	data: form
			}).done(function( msg ) {

				//alert("Success");
			    //console.log(msg);

			    $("#msg").text(msg);
			    $("#msg").css("color","green");


			    setTimeout(function(){

			    	location.href="{{ URL('product') }}";
			    },1000);

			    

			}).fail(function( jqXHR, textStatus, errorThrown){

				let msg = JSON.parse(jqXHR.responseText);
			
				//console.log(msg.errors);

				$("#name_error").text(msg.errors.name);
				//jqXHR = JSON.parse(jqXHR);
				//console.log(jqXHR);
			});
		});
		/*
		$.ajax({
			
		  	method: "GET",
		  	url: "{{ URL('get_data') }}",
		  	//data: { name: "John", location: "Boston" }
		}).done(function( msg ) {

			alert("Success");
		    console.log(msg);

		}).fail(function( jqXHR, textStatus, errorThrown){

			console.log(jqXHR);
		});*/


	</script>
@endsection