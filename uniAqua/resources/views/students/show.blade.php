@extends('app')

@section('title', 'student-detail')

@section('content')
    <section>
        <h1 class='my-5'>Student Detail</h1>
        <div class='d-flex justify-content-center'>
            <div class="card w-50" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-title">Firstname: {{ $student->firstname }}</p>
                    <p class="card-title">Lastname: {{ $student->lastname }}</p>
                    <p class="card-text">Birthdate: {{ $student->birthdate }}</p>
                    <p class="card-text">Gender:
                        @if ($student->gender == 0)
                            Male
                        @else
                            Female
                        @endif
                    </p>
                    <p class="card-text">Course: {{ isset($student->course->name) ? $student->course->name : '' }}</p>
                    <a href="{{ route('student.index') }}" class="btn btn-success">Go Back</a>
                </div>
            </div>
        </div>
    </section>
@endsection
