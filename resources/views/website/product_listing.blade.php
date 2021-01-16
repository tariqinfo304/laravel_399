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
						<li class="active"><a href="#">Product Listing</a></li>
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

					@forelse($listing as $row)

						<div class="col-md-4">
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/product03.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">{{ $row->name }}</p>
									<h3 class="product-name">
										<a href="#" tabindex="0">{{ $row->name }}</a>
									</h3>
									<h4 class="product-price">{{ $row->price }} <span class="product-price">({{ $row->quantity }})</span></h4>
								</div>
							</div>
						</div>

					@empty
						<p>Data not Found</p>
					@endforelse
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->


@endsection