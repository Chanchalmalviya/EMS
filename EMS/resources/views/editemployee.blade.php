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
		<h3>Update Employee</h3>
		<div class="row" style="margin-top: 50px;">
			<form action="{{url ('updateemployee' ,($record->id))}}" method="post" enctype="multipart/form-data" >
			 @csrf
			  <div class="form-group">
			    <label for="text">Employee Name:</label>
			    <input type="text" name="name" value="{{$record->name}}" class="form-control" id="name">
			  </div>

			  <div class="form-group">
			    <label for="text">Image:</label>
			    <input type="file" name="image" value="{{$record->image}}" class="form-control" id="image">
				<img src ="{{ asset('employeeimage/'.$record->image) }}" width="60px" height="60px" >
			  </div>

			  <div class="form-group">
			    <label for="text">Experience:</label>
			    <input type="text" name ="experience" value="{{$record->experience}}" class="form-control" id="">
			  </div>

			  <div class="form-group">
			    <label for="text">Occupation:</label>
			    <select name="occupation_id"  id ="occupation_id" value ="{{$record->occupation_id}}" class="form-control">
			    	<option >Select</option>
					@if(!empty($data))
				    @foreach($data as $datas)
			    	<option type="text" value="{{$datas->id}}" >{{$datas->occupation}} </option>
					@endforeach
				    @endif
			    </select>
			  </div>

			  <button type="submit" class="btn btn-default">Submit</button>
			</form>

		</div>
	</div>
</body>
</html>