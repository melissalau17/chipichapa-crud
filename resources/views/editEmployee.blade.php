<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Edit Employee</title>
</head>
<body>
<h1 class="p-5">Edit Employee</h1>
<form class="p-5" method="POST" action="{{ route('update', $employee->id) }}">
        @csrf
        @method('PATCH')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $employee->name }}">
        @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Age</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="age" value="{{ $employee->age }}">
        @error('age')
              <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Address</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="address" value="{{ $employee->address }}">
        @error('address')
              <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Number</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="number" value="{{ $employee->number }}">
        @error('number')
              <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="d-flex mt-5">
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
          <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3 ml-3">Back to Dashboard</a>
    </div>
    </form>
</body>
