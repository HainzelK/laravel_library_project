<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal List</title>
</head>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Year Published</th>
            <th>Pages</th>
            <th>Abstract</th>
            <th>Price</th>
        </tr>
        @foreach($datas as $journal) 
        <tr>
            <td>{{ $journal->Title }}</td>
            <td>{{ $journal->Author }}</td>
            <td>{{ $journal->Publisher}}</td>
            <td>{{ $journal->Year_Published }}</td>
            <td>{{ $journal->Pages }}</td>
            <td>{{ $journal->Abstract}}</td>
            <td>{{ $journal->Price }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
