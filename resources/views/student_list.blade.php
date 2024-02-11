@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">All Student List</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>District</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $record)
                <tr>
                    <td>{{$record->id}}</td>
                    <td>{{$record->name}}</td>
                    <td>{{$record->email}}</td>
                    <td>{{$record->phone}}</td>
                    <td>{{$record->age}}</td>
                    <td>{{$record->gender}}</td>
                    <td>{{$record->district}}</td>
                    <td>
                        <a href="edit/{{$record->id}}" class="btn btn-primary">Update</a>
                        <a href="delete/{{$record->id}}" class="btn btn-danger">Delete</a>
                        <a href="{{route('add_edu',$record->id)}}" class="btn btn-dark">Add Education</a>
                    </td>
                </tr>
                @endforeach
                <!-- Add more rows dynamically with data from form submissions -->
            </tbody>
        </table>
    </div>
</div>
@endsection