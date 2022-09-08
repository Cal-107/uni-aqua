<div class="mb-3">
    <label for="name" class="form-label">Name</label>

    <input type="text" class="form-control" name="name"
        value="{{ old('name', isset($course) ? $course->name : '') }}">

    @error('name')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>

    <input type="text" class="form-control" name="description"
        value="{{ old('description', isset($course) ? $course->description : '') }}">

    @error('description')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="period" class="form-label">Period</label>

    <input type="text" class="form-control" name="period"
        value="{{ old('period', isset($course) ? $course->period : '') }}">

    @error('period')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="year" class="form-label">Year</label>

    <input type="number" class="form-control" name="year"
        value="{{ old('year', isset($course) ? $course->year : '') }}">

    @error('year')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="cfu" class="form-label">CFU</label>

    <input type="number" class="form-control" name="cfu"
        value="{{ old('cfu', isset($course) ? $course->cfu : '') }}">

    @error('cfu')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
