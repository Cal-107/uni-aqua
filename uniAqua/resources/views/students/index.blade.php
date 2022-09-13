@extends('app')

@section('title', 'Student')

@section('content')
    <div class='row d-flex justify-content-center'>
        <h1 class='my-5'>Student List</h1>
        <div class="my-3 text-end">
            <a href="{{ route('student.create') }}">
                <button class="btn btn-primary">
                    Add Player
                </button>
            </a>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  Filter Students By Course
                </button>
                <ul class="mt-2 dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    @foreach($courses as $course)
                    <li class="text-center">
                        <a href="{{ route('getCourses', $course->id) }}">
                            <button type="button" class="btn btn-outline-light border-0">
                                {{ $course->name }}
                            </button>
                        </a>
                    </li>
                    @endforeach
                </ul>
              </div>
        </div>
        <table class="table table-success col-6 text-center table-striped table-hover border border-success">
            <thead>
                <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Delete Students</th>
                    <th scope="col">Edit Student</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>
                            <a href="{{ route('student.show', $student->id) }}">
                                <button class="btn btn-primary">Detail student</button>
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('student.destroy', $student) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete Student</button>
                            </form>
                        </td>

                        <td>
                            <a href="{{ route('student.edit', $student) }}">
                                <button class="btn btn-dark">Edit Student</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
