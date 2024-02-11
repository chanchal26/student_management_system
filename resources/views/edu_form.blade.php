@extends('layouts.app')

@section('content')
<div class="container d-flex gap-2">
    <div class="w-50 mx-auto border p-1">
        <h2>Add Degree</h2>
        <form action="{{route('store_edu')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="studentId">Student id:</label>
                <input type="number" class="form-control" value="{{$id}}" id="studentId" name="studentId">
            </div>
            <div class="form-group">
                <label for="degreeName">Degree Name:</label>
                <input type="text" class="form-control" id="degreeName" name="degreeName" required>
            </div>
            <div class="form-group">
                <label for="instituteName">Institute Name:</label>
                <input type="text" class="form-control" id="instituteName" name="instituteName" required>
            </div>
            <div class="form-group">
                <label for="passingYear">Passing Year:</label>
                <input type="year" class="form-control" id="passingYear" name="passingYear" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    <div class="w-50 mx-auto border p-1">
        <h2>All Degree</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Student Id</th>
                        <th>Degree Name</th>
                        <th>Institute Name</th>
                        <th>Passing Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $record)
                    <tr>
                        <td>{{$record->studentId}}</td>
                        <td>{{$record->degreeName}}</td>
                        <td>{{$record->instituteName}}</td>
                        <td>{{$record->passingYear}}</td>
                        <td>
                            <a href="edu-edit/{{$record->id}}" class="btn btn-primary">Update</a>
                            <a href="edu-delete/{{$record->id}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection