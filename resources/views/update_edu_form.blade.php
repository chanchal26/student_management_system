@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Update Education</h2>
    <form action="{{route('store_updated_edu',$data->id)}}" method="post">
        @csrf
        
        <div class="form-group">
            <label for="studentId">Student id:</label>
            <input type="number" class="form-control" value="{{$data->studentId}}" id="studentId" name="studentId">
        </div>
        <div class="form-group">
            <label for="degreeName">Degree Name:</label>
            <input type="text" class="form-control" value="{{$data->degreeName}}" id="degreeName" name="degreeName" required>
        </div>
        <div class="form-group">
            <label for="instituteName">Institute Name:</label>
            <input type="text" class="form-control" value="{{$data->instituteName}}" id="instituteName" name="instituteName" required>
        </div>
        <div class="form-group">
            <label for="passingYear">Passing Year:</label>
            <input type="year" class="form-control" value="{{$data->passingYear}}" id="passingYear" name="passingYear" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection