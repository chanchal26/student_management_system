@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Update Student</h2>
    <form action="{{route('update_student',$data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" value="{{$data->name}}" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" value="{{$data->email}}" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" class="form-control" id="phone" value="{{$data->phone}}" name="phone" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" value="{{$data->age}}" name="age" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="male" {{$data->gender==='male'? 'selected':''}} >Male</option>
                <option value="female" {{$data->gender==='Female'? 'selected':''}}>Female</option>
                <option value="other" {{$data->gender==='Other'? 'selected':''}}>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="district">District:</label>
            <input type="text" class="form-control" id="district" value="{{$data->district}}" name="district" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection