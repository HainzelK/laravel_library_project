<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspaper List</title>
</head>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year Published</th>
            <th>Pages</th>
            <th>Price</th>
        </tr>
        @foreach($datas as $newspaper) 
        <tr>
            <td>{{ $newspaper->Title }}</td>
            <td>{{ $newspaper->Author }}</td>
            <td>{{ $newspaper->Year_Published }}</td>
            <td>{{ $newspaper->Pages }}</td>
            <td>{{ $newspaper->Price }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
