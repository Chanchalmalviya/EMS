
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Occupation</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<div class="row" style="margin-top: 50px;">
			<h3>Manage Occupation
				<a class="pull-right" href="/add_occupation">Add New Occupation</a>
			</h3>
			<table class="table table-bordered">

				<tr>
					<td>S No.</td>
					<td>Occupation Name</td>
					<td>Action</td>
				</tr>

                @foreach($data as $datas)
				<tr>
					<td>{{$datas->id}}</td>
					<td>{{$datas->occupation}}</td>
					<td>
						<a href="/edit_occupation/{{$datas->id}}" class="btn btn-success">Edit</a>
						<a href="/delete_occupation/{{$datas->id}}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</table>

			<a href="/home" class="btn btn-primary">Manage Employee</a>

		</div>
	</div>
</body>
</html>