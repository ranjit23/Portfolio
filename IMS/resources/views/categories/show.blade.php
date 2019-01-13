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
				CATEGORY NAME: {{ $category->category_name }}
			</p>
			<div class="box">
			<p class="subtitle">SUBTITLE : {{$category->category_status}}</p>

		<div class="box">
   		 <a href="/categories/{{ $category->id }}/edit">Edit</a> 
   		 </div>

		

		</div>
		</div>
	</div>
</body>
</html>