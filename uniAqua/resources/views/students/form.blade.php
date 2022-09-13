<div class="mb-3">
    <label for="firstname" class="form-label">Firstname</label>

    <input type="text" class="form-control" name="firstname"
        value="{{ old('firstname', isset($student) ? $student->firstname : '') }}">

    @error('firstname')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="lastname" class="form-label">Lastname</label>

    <input type="text" class="form-control" name="lastname"
        value="{{ old('lastname', isset($student) ? $student->lastname : '') }}">

    @error('lastname')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="birthdate" class="form-label">birthdate</label>

    <input type="date" class="form-control" name="birthdate"
        value="{{ old('birthdate', isset($student) ? $student->birthdate : '') }}">

    @error('birthdate')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="gender" class="form-label">Gender</label>

    <div class="form-check">
        <label class="form-check-label" for="gender">
            Male
        </label>
        <input class="form-check-input" type="radio" name="gender" value="0"
            @if (isset($student)) @checked(!old('gender', $student->gender))> @endif </div>

    </div>
    <div class="form-check">
        <label class="form-check-label" for="gender">
            Female
        </label>
        <input class="form-check-input" type="radio" name="gender" value="1"
            @if (isset($student)) @checked(old('gender', $student->gender))> @endif </div>

        @error('gender')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="mb-3">
    <label for="course_id" class="form-label">Course</label>

    <select type="select" class="form-control" name="course_id">
        @foreach ($courses as $course)
            <option
                @if (isset($student)) value="{{ old('course_id', $course->id) }}" 
                    @selected($student->course_id == $course->id)
                @else
                    value="{{ $course->id }}" @endif>
                {{ $course->name }}
            </option>
        @endforeach
    </select>


    @error('course_id')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
