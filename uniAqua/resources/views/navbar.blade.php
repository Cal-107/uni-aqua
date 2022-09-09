<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid w-75">
        {{-- <div>
            <img src="//airport/public/images/aquaconsulting-logo.png" alt="Logo Aqua">
        </div> --}}
        <a class="navbar-brand" href="#">Aqua University</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flez justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('course.index') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('student.index') }}">Students</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
