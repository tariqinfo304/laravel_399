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
						<li><a href="{{ URL('website') }}">Home</a></li>
						<li class="active"><a href="{{ URL('product') }}">Product Listing</a></li>

						
					</ul>
				</div>

				<button style="float: right;" class="btn btn-primary"><a style="color: white" href="{{ URL('product/create') }}"> <i class="fa fa-plus"></i> Add Product</a></button>
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

					<table class="table">
						<thead>
							<tr>
								<th>Image</th>
								<th>Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
						
					@forelse($listing as $row)

						<tr>
							<td><img height="50px" width="50px" src="./img/product03.png" alt=""></td>
							<td>{{ $row->name }}</td>
							<td>{{ $row->price }}</td>
							<td>{{ $row->quantity }}</td>
							<td>
								@php 

									$edit = "product/$row->id/edit";
									$delete = "product/$row->id/delete";


								 @endphp
								<a href="{{ URL($edit) }}"><i class="fa fa-edit"></i></a>
								<a href="{{ URL($delete) }}">
									<i class="fa fa-remove"></i></a>
							</td>
						</tr>

					@empty
						<p>Data not Found</p>
					@endforelse

					</tbody>
					</table>

					{{ $listing->links() }}
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->


	<script type="text/javascript">
		


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
		});
		*/

	</script>

@endsection