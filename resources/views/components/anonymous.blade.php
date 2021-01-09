<p>anonymous Compoenent without creating component class</p>

<!-- 
You may specify which attributes should be considered data variables using the 
props directive at the top of your component's Blade template.


 All other attributes on the component will be available via the component's attribute bag. 

-->

<!-- Here we described which attriubute as data attributes -->
@props(['type',"data"])


<input type="{{ $type }}"/>
<p>{{ $data }}</p>


<p> class : {{ $attributes->get("class") }}</p>
