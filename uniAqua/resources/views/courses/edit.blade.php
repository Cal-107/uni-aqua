@extends('app')

@section('title', 'Edit-Course')

@section('content')
    <h1>Edit Course</h1>
    <form method="POST" action="{{ route('course.update', $course->id) }}">
        @csrf
        @method('PATCH')
        @include('courses.form')
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
        <a href="{{ route('course.index') }}" class="btn btn-primary">Go Back</a>
    </form>
@endsection
