<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
</head>
<body>
	<div class="container">
		<div class="box" style="margin-top: 30px;">
			<p class="title">ALL CATEGORIES</p>
	@foreach ($categories as $category)
			<div class="box" style="margin-top: 30px;">

		<li class="subtitle"><a href="/categories/{{$category->id}}">{{$category->category_name}} </a></li>
			</div>

	@endforeach
	</div>
</div>
</body>
</html>