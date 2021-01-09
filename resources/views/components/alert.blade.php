<div>
    <p>Title : {{ $titleValue }}</p>
    <p>Description : {{ $message }}</p>
    <p>functional Call  : {{ $checkValid() }}</p>
</div>
<hr/>
<!-- All of the attributes that are not part of the component's constructor will automatically be added to the component's "attribute bag".  -->
<div>
	{{ $attributes }}
	<hr/>
    <hr/>


	<!-- Added value in exitsing argument -->
	<!--  the values provided to the merge method will be considered the "default" values of attribute -->
	<div>
    	{{ $attributes->merge(['class' => 'alert1 alert1-'.$titleValue]) }}
    	<hr/>

    	<!-- Non-Class Attribute Merging -->
    	{{ $attributes->merge(['data-name' => 'new vaklue']) }}

    	<hr/>
    	<!-- Get non-class attirbute value -->
    	{{ $attributes['data-name'] }} OR {{ $attributes->get('data-name') }}

    	<hr/>

	</div>
</div>

<hr/>
<!-- show Slots Content -->
Title : {{ $title_slot }} 
 <strong>=> with Desription =></strong> 
{{ $slot }}

<hr/>

<h2>Custom Directive in Blade ( will be registerted in App-Service provider</h2>

<!-- Custom made directive  -->
@hasseb_cream_wala("HAsseb")

<hr/>

