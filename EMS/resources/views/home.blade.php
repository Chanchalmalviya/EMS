@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                
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

			<a href="/view_occupation" class="btn btn-primary" >Manage Occupation</a>
            </div>
		</div>
	</div>
</div>
@endsection
