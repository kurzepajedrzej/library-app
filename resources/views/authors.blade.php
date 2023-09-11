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
        <h1>Authors and Their Books</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Author</th>
                    <th>Books</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authorsWithBooks as $authorData)
                    <tr>
                        <td>{{ $authorData['author'] }}</td>
                        <td>
                            <ul>
                                @foreach ($authorData['books'] as $book)
                                    <li>{{ $book->title }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
