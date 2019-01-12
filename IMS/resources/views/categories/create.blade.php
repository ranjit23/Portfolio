<!DOCTYPE html>
<html>
<head>
	<title>CREATE CATEGORY</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
</head>
<body>
			<form method="POST" action="/categories" >
			{{csrf_field()}}
			<div class="container">
			<div class="box" style="margin-top: 80px;">
				<p class="title">ADD CATEGORY</p>
			<div class="field">
			<label class="label">CATEGORY NAME</label>
			<div class="control">
			<input class="input" type="text" placeholder="e.g Alex Smith" name="brand_name">
			</div>
			</div>			
			<select class="form-control" name="brand_status" required="required">
			<option value="Active">Active</option>
			<option value="Inactive">Inactive</option>
			</select>

			<div class="control">
			<button class="button is-link" style="margin-top: 20px;" type="Submit">Submit</button>
			</div>
			</div>
			</div>
			</div>
			</div>
			</form>
</body>
</html>