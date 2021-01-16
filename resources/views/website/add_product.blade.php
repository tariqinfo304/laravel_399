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

				@if(!empty($obj->id))

					<form method="POST" action="{{ URL('product/'.$obj->id) }}">

				@else

					<form method="POST" action="{{ URL('product') }}">

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
					  </div>
					 <div class="form-group">
					    <label for="price">Product Price</label>
					    <input type="number" class="form-control" name="price" aria-describedby="name"

					     {{ $disable ?? "" }}

					    value="{{ $obj->price ?? '' }}"
					     placeholder="Enter Price">
					  </div>
					  <div class="form-group">
					    <label for="quantity">Product Quantity</label>
					    <input type="number" class="form-control" name="quantity" aria-describedby="quantity"

					     {{ $disable ?? "" }}
					     
					    value="{{ $obj->quantity ?? '' }}"
					     placeholder="Enter Quantity">
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


@endsection