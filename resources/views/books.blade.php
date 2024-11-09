<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
</head>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Year Published</th>
            <th>Pages</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        @foreach($datas as $book) 
        <tr>
            <td>{{ $book->Title }}</td>
            <td>{{ $book->Author }}</td>
            <td>{{ $book->Publisher }}</td>
            <td>{{ $book->Year_Published }}</td>
            <td>{{ $book->Pages }}</td>
            <td>{{ $book->Description }}</td>
            <td>{{ $book->Price }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
