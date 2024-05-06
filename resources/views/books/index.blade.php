<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<h1 class="display-5 fw-bold text-body-emphasis text-center">Books</h1>


@if(!Auth::check())
    <div class="container px-5 py-5">
        <h3>
            <a href="{{ route('authors.index') }}" class="pb-2 border-bottom text-dark">Authors</a>
        </h3>
        <div class="user row row-cols-1 row-cols-md-4 g-5">
            @foreach($books as $book)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
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
            @endforeach
        </div>
    </div>

@else
    <div class="container px-5 py-4">
        <h5>
            <a href="{{ route('books.create') }}" class="pb-2 border-bottom text-dark">Create</a>  |
            <a href="{{ route('books.create') }}" class="pb-2 border-bottom text-blue">Log out</a>
        </h5>
        <div class="row row-cols-1 row-cols-md-4 g-5">
            @foreach($books as $book)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
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
                                <strong>Author:</strong>
                            <span id="selectedAuthor"></span>

                            @if ($book->author)
                                {{ $book->author->first_name }} {{ $book->author->last_name }}
                            @else
                                No author specified
                            @endif
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="{{ route('books.show', ['book' => $book->id]) }}" class="btn btn-outline-primary me-2">View</a>
                            <a href="{{ route('books.edit', ['book' => $book->id]) }}" class="btn btn-outline-secondary me-2">Edit</a>
                            <form action="{{ route('books.destroy', ['book' => $book->id]) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
<div class="d-flex justify-content-center">
    {{ $books->links() }}
</div>

</body>
</html>
