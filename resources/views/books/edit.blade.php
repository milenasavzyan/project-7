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
    <form action="{{ route('books.update', ['book'=>$book]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $book->title }}" style="border-color: #4a5568; width: 50%;">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="description" placeholder="Description" rows="4" style="border-color: #4a5568; width: 50%;">{{ $book->description }}</textarea>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="publication_year" placeholder="Publication Year" value="{{ $book->publication_year }}" style="border-color: #4a5568; width: 50%;">
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #4a5568; border-color: #4a5568;">Submit</button>
    </form>
</div>


</body>
</html>
