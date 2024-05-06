<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>
<body>
<div class="container px-4 py-5">
    <h1 class="mb-4">Create Book</h1>
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" style="border-color: #4a5568; width: 50%;">
        </div>
        <div class="mb-3">
            <label for="publication_year" class="form-label">Publication Year</label>
            <input type="number" class="form-control" id="publication_year" name="publication_year" placeholder="Publication Year" style="border-color: #4a5568; width: 50%;">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Description" rows="4" style="border-color: #4a5568; width: 50%;"></textarea>
        </div>
        <div class="mb-3">
            <select class="form-select" id="authorSelect" style="border-color: #4a5568; width: 50%;" onchange="updateSelectedAuthor()">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #4a5568; border-color: #4a5568;">Submit</button>
    </form>
</div>

<script>
    function updateSelectedAuthor() {
        var selectElement = document.getElementById("authorSelect");
        var selectedAuthor = selectElement.options[selectElement.selectedIndex].text;
        sessionStorage.setItem('selectedAuthor', selectedAuthor);
    }
</script>



</body>
</html>
