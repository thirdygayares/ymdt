@extends('pages.layout.frontend')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4 text center" >
            @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Fetch data from data base using Eloquent Model
                        <a href="{{ 'add-employee' }}" class="btn btn-primary float-end">Add Employee</a>

                    </h4>
                </div>
                <div class="card-body">


            <table class="table">

                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($employee as $empdata)

                        <tr>
                            <td >{{ $empdata->id }}</td>
                            <td >{{ $empdata->name }}</td>
                            <td >{{ $empdata->email }}</td>
                            <td >{{ $empdata->phone }}</td>
                            <td >{{ $empdata->designation }}</td>
                            <td >{{ $empdata->status }}</td>

                            <td>
                                <a href="{{url('edit-employee/' .$empdata->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('delete-employee/' .$empdata->id)}}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                        @endforeach

                </tbody>
              </table>
            </div>
        </div>
    </div>
    </div>
</div>


@endsection
