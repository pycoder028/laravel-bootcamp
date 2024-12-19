<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Project!</title>
</head>

<body>

    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Create</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Table start -->
    <div class="container mt-3">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Registration ID</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Info</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($students as $key=> $student)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $student->registration_id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->department_name }}</td>
                <td>{{ $student->info }}</td>
              </tr>
              @endforeach
        
            </tbody>
          </table>
    </div>
    <!-- Table end -->

    <!-- Bootstrap js bunddle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>