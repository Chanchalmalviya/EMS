<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<h3>Add Employee</h3>
		<div class="row" style="margin-top: 50px;">
			<form action="{{ url('/employeeadd') }}" method="post" enctype="multipart/form-data" >
			 @csrf
			  <div class="form-group">
			    <label for="text">Employee Name:</label>
			    <input type="text" name="name" class="form-control" id="name">
				@if($errors->has('name'))
				    			<span class="text-danger">{{ $errors->first('name') }}
                                </span>
			    @endif		
			  </div>

			  <div class="form-group">
			    <label for="text">Image:</label>
			    <input type="file" name="image" class="form-control" id="image">
				@if($errors->has('image'))
				    			<span class="text-danger">{{ $errors->first('image') }}
                                </span>
			    @endif
			  </div>

			  <div class="form-group">
			    <label for="text">Experience:</label>
			    <input type="text" name="experience"  class="form-control" id="experience">
				@if($errors->has('experience'))
				    			<span class="text-danger">{{ $errors->first('experience') }}
                                </span>
			    @endif
			  </div>

			  <div class="form-group">
			    <label for="text">Occupation:</label>
			    <select  name="occupation"  id ="occupation" class="form-control">
			    	<option type="text" value="Select" >Select</option>
			    	<option type="text" value="Web Developer" >Web Developer</option>
			    	<option type="text" value="Graphic Designer" >Graphic Designer</option>
			    </select>
				@if($errors->has('occupation'))
				    			<span class="text-danger">{{ $errors->first('occupation') }}
                                </span>
			    @endif
			  </div>

			  <button type="submit" class="btn btn-default">Submit</button>
			</form>

		</div>
	</div>
</body>
</html>