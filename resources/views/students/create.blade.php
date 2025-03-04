<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <!-- place navbar here -->
    <h1 class=" container text-start">University Project</h1>
    <h1 class=" container text-end">Create Students</h1>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Main</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('students.index') }}" aria-current="page">Student
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">registration</a>
                    </li>
                </ul>
                <div>
                    Project by Pannawat
                </div>
            </div>
        </div>
    </nav>

    </header>
    <main>
        <div class="card container">
            <div class="row justify-content-center align-items-center g-2">
                <h1 class="text-center">Create Student Form</h1>
            </div>
            <div class="row justify-content-start align-items-center g-2">
                <div class="col-3">
                    <a href="{{ route('students.index') }}" class="btn btn-danger w-50">Back</a>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="row justify-content-center align-items-center g-2 mb-3">
                    <div class="col-3">
                        <label for="stid" class="form-label">Student ID</label>
                        <input type="text" class=" form-control" name="stid" id="stid"
                            placeholder="student ID">
                        @error('stid')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center align-items-center g-2 mb-3">
                    <div class="col-3">
                        <label for="fname" class="form-label">First name</label>
                        <input type="text" class="form-control" name="fname" id="fname"
                            placeholder="First Name">
                        @error('fname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="row justify-content-center align-items-center g-2 mb-3">
                    <div class="col-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="lname"
                            placeholder="Last Name">
                        @error('lname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center align-items-center g-2 mb-3">
                    <div class="col-3">
                        <div class="row justify-content-center align-items-center g-2 mb-3">
                            <input type="submit" class="btn btn-primary w-50" name="submit" id="submit"
                                value="Create">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
