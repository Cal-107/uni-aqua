@extends('app')

@section('title', 'course-detail')

@section('content')
    <section>
        <h1 class='my-5'>Course Detail</h1>
        <div class='d-flex justify-content-center'>
            <div class="card w-50" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-title">Course Name: {{ $course->name }}</p>
                    <p class="card-title">Description: {{ $course->description }}</p>
                    <p class="card-text">Period: {{ $course->period }}</p>
                    <p class="card-text">Year: {{ $course->year }}</p>
                    <p class="card-text">CFU: {{ $course->cfu }}</p>
                    <a href="{{ route('course.index') }}" class="btn btn-success">Go Back</a>
                </div>
            </div>
        </div>

        <h2 class="my-4">Students</h2>
        <table class="table table-success col-6 text-center table-striped table-hover border border-success">
            <thead>
                <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Profile</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($course->students as $student)
                    <tr>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>
                            <a href="{{ route('student.show', $student->id) }}">
                                <button class="btn btn-primary">Show student</button>
                            </a>
                        </td>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
