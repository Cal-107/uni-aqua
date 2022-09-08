@extends('app')

@section('title', 'Edit-Student')

@section('content')
    <h1>Edit Student</h1>
    <form method="POST" action="{{ route('student.update', $student->id) }}">
        @csrf
        @method('PATCH')
        @include('students.form')
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
        <a href="{{ route('student.index') }}" class="btn btn-primary">Go Back</a>
    </form>
@endsection
