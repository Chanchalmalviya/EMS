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
		<div class="row" style="margin-top: 50px;">
			<h3>Manage Employee
				<a class="pull-right" href="/addemployee">Add New Employee</a>
			</h3>
			<table class="table table-bordered">

				<tr>
					<td>S No.</td>
					<td>Employee Name</td>
					<td>Image</td>
					<td>Experience</td>
					<td>Occupation</td>
					<td>Action</td>
				</tr>
                 
			@foreach ($records as $employee)
				<tr>
				    <td>{{ $employee->id }}</td>
					<td>{{ $employee->name }}</td>
					<td><img src ="{{ asset('employeeimage/'.$employee->image) }}"  alt="image"  width="60px" height="60px" class="img img-responsive"/></td>
					<td>{{ $employee->experience }}</td>
					<td>{{ $employee->occupation }}</td>
					<td>
						<a href="/editemployee/{{$employee->id}}" class="btn btn-success">Edit</a>
						<a href="/deleteemployee/{{$employee->id}}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
            @endforeach
			</table>

			<a href="occupation/index.html" class="btn btn-primary">Manage Occupation</a>

		</div>
	</div>
</body>
</html>