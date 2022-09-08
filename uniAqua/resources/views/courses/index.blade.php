@extends('app')

@section('title', 'course')

@section('content')
    <div class='row d-flex justify-content-center'>
        <h1 class='my-5'>Courses List</h1>
        <div class="my-3 text-end">
            <a href="{{ route('course.create') }}">
                <button class="btn btn-primary">
                    Add Course
                </button>
            </a>
        </div>
        <table class="table table-success col-6 text-center table-striped table-hover border border-success">
            <thead>
                <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course's Detail</th>
                    <th scope="col">Delete course</th>
                    <th scope="col">Edit course</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>
                            <a href="{{ route('course.show', $course->id) }}">
                                <button class="btn btn-primary">Show Course</button>
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('course.destroy', $course) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete Course</button>
                            </form>
                        </td>

                        <td>
                            <a href="{{ route('course.edit', $course) }}">
                                <button class="btn btn-dark">Edit Course</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
