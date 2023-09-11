<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
</head>
<body>
    <header>
        @include('navbar')
    </header>

    <div class="container">
        <!-- Search Form -->
        <form action="{{ route('search') }}" method="GET" class="search-form mt-4">
            <div class="input-group">
                <input type="text" name="query" placeholder="Enter Title or Author" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    
        <!-- Display Search Results (Conditional) -->
        @if(isset($results))
        <div id="results" class="mt-4">
            <h2>Search Results</h2>
            <ul class="list-group">
                @foreach ($results as $book)
                <li class="list-group-item">{{ $book->title }} by {{ $book->author }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>   
</body>
</html>
