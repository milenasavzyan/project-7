<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>
<body>
<h1>Show</h1>
<div class="container col row row-cols-2 row-cols-md-4">
    <div class="card border-0">
        <div class="card-header" style="background-color: #4a5568; color: white;">
            <h5 class="card-title mb-0">{{ $book->title }}</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li><strong>Description:</strong> {{ $book->description }}</li>
            </ul>
            <ul class="list-unstyled">
                <li><strong>Publication Year:</strong> {{ $book->publication_year }}</li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
