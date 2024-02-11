@extends('layouts.app')

@section('content')

<h1 class="text-center">Wellcome to Home page.</h1>
<center class="mt-3">
    <a href="{{route('create_student')}}" class="btn btn-primary me-2">Add Student</a>
    <a href="{{route('student_list')}}" class="btn btn-primary ms-2">Student List</a>
</center>


@endsection