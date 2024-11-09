<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skripsi List</title>
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
        @foreach($datas as $skripsi) 
        <tr>
            <td>{{ $skripsi->Title }}</td>
            <td>{{ $skripsi->Author }}</td>
            <td>{{ $skripsi->Publisher}}</td>
            <td>{{ $skripsi->Year_Published }}</td>
            <td>{{ $skripsi->Pages }}</td>
            <td>{{ $skripsi->Abstract}}</td>
            <td>{{ $skripsi->Price }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
