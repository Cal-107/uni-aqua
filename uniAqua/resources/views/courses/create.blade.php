@extends('app')

@section('title', 'Add-Course')

@section('content')
    <h1>Add Course</h1>
    <form method="POST" action="{{ route('course.store') }}">
        @csrf
        @include('courses.form')
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
        <a href="{{ route('course.index') }}" class="btn btn-primary">Go Back</a>
    </form>
@endsection
