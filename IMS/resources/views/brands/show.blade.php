<!DOCTYPE html>
<html>
<head>
	<title>SHOW</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
</head>
<body>
	<div class="container">
		<div class="box" style="margin-top: 30px;">
			<p class="title">
				BRAND NAME: {{ $brand->brand_name }}
			</p>
			<div class="box">
			<p class="subtitle">SUBTITLE : {{$brand->brand_status}}</p>

		<div class="box">
   		 <a href="/brands/{{ $brand->id }}/edit">Edit</a> 
   		 </div>

		<div class="control">	    
    		<button class="button is-link" style="margin-top: 40px;" href="/brands/{{ $brand->id }}/edit">DELETE</button>
   		</div>

		</div>
		</div>
	</div>
</body>
</html>