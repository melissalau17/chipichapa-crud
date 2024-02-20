<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lobster');
    </style>
    <title>Employees List</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: lightblue;">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="custom-navbar-section d-flex align-items-center">
                <img id="logo" src="https://live.staticflickr.com/65535/53535295282_ed8b934119_w.jpg" width="45" height="45" alt="">
                <h3 class="ms-4" style="font-family: 'Lobster', sans-serif;">ChipaChapa Employee Page</h3>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('create') }}" class="btn btn-primary">Add Employee</a>
            <h1 class="text-center">Employees List</h1>
            <div style="width: 130px;"></div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employee as $e)
                <tr>
                    <td>{{ $e->name }}</td>
                    <td>{{ $e->age }}</td>
                    <td>{{ $e->address }}</td>
                    <td>{{ $e->number }}</td>
                    <td>
                        <a href="{{ route('edit', ['id' => $e->id]) }}" class="btn btn-primary">Edit</a>
                        <form method="POST" action="{{ route('destroy', ['id' => $e->id]) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
