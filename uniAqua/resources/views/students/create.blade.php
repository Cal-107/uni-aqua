@extends('app')

@section('title', 'Add-student')

@section('content')
    <h1>Add Student</h1>
    <form method="POST" action="{{ route('student.store') }}">
        @csrf
        @include('students.form')
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
        <a href="{{ route('student.index') }}" class="btn btn-primary">Go Back</a>
    </form>
@endsection
