 
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
        <h1 class="main-heading">Welcome to library Website</h1>
        <p class="subtext">Select:</p>
    </div>


    <div class="container">
        <h1 style="text-align:center;"></h1>
        <div class="button-container">
            <a href="{{ route('search') }}">
                <button class="btn btn-primary btn-lg" style="margin-right: 40px;">Search</button>
            </a>
            <a href="{{ route('books') }}">
                <button class="btn btn-primary btn-lg" style="margin-right: 40px;">Books</button>
            </a>
            <a href="{{ route('authors') }}">
                <button class="btn btn-primary btn-lg">Authors</button>
            </a>
        </div>
    </div>
    
    
</body>
</html>
