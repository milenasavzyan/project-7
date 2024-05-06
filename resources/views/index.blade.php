<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5 col-lg-6 mx-auto px-4 pt-5 my-5 text-center">
    <ul class="nav nav-pills nav-fill gap-4 p-2 rounded-4" style="background-color: #4a5568;">
        <li class="nav-item" role="presentation">
            <a href="{{ route('books.index') }}">
                <button class="btn btn-lg px-4 me-sm-3" style="background-color: #4a5568;">Books</button>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('authors.index') }}">
                <button class="btn btn-lg px-4 me-sm-3" style="background-color: #4a5568;">Authors</button>
            </a>
        </li>
    </ul>
</div>
<div class="col-md-10 mx-auto col-lg-4">
    <form action="{{ route('login') }}" method="POST" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
        @csrf
        <div class="form-floating mb-3">
            <input type="name" name="name" class="form-control" id="floatingInput" placeholder="User Name">
            <label for="floatingInput">User Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <label for="floatingInput">Password</label>
        </div>
        <button type="submit" class="w-100 btn btn-lg" style="background-color: #4a5568;">Sign In</button>
        <hr class="my-4">
        <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
    </form>


</div>


</body>
