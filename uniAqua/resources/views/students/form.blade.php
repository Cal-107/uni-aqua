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
    <label for="course_id" class="form-label">Course</label>

    <input type="number" class="form-control" name="course_id"
        value="{{ old('course_id', isset($student) ? $student->course_id : '') }}">

    @error('course_id')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
