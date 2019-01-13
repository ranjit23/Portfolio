<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
</head>
<body>
	<div class="container">
	<div class="box" style="margin-top: 30px;">
	<div class="container">
	<h1 class="title">EDIT</h1>
	<form method="post" action="/categories/{{$category->id}}">
		{{csrf_field()}}
		{{method_field('PATCH')}}
		<div class="control">
    		<input class="input" type="text" placeholder="Normal input" name="category_name" value="{{$category->category_name}}">
    	</div>

    	<select class="form-control" name="category_status" required="required">
			<option value="Active">Active</option>
			<option value="Inactive">Inactive</option>
			</select>
			<div class="control">	    
    		<button class="button is-link" type="Submit">Submit</button>
    		</div>

  		
	</form>
	<form method="POST" action="/categories/{{$category->id}}">
		{{csrf_field()}}
				{{method_field('DELETE')}}

		<div class="control">	    
    		<button class="button is-link" type="Submit" style="margin-top: 40px;">DELETE</button>
   		</div>

	</form>
		</div>
</div>
</div>
</body>
</html>