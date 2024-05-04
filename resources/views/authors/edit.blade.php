<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>
<body>
<div class="container px-4 py-5">
    <h1 class="mb-4">Update</h1>
    <form action="{{ route('authors.update', ['author'=>$author]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ $author->first_name }}" style="border-color: #4a5568; width: 50%;">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ $author->last_name }}" style="border-color: #4a5568; width: 50%;">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="biography" placeholder="Biography" rows="4" style="border-color: #4a5568; width: 50%;">{{ $author->biography }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #4a5568; border-color: #4a5568;">Submit</button>
    </form>
</div>

</body>
</html>
