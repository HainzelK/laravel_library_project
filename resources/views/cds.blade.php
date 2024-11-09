<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD List</title>
</head>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Artist</th>
            <th>Year Published</th>
            <th>Duration</th>
            <th>Price</th>
        </tr>
        @foreach($datas as $cd) 
        <tr>
            <td>{{ $cd->Title }}</td>
            <td>{{ $cd->Artist }}</td>
            <td>{{ $cd->Year_Published }}</td>
            <td>{{ $cd->Duration }}</td>
            <td>{{ $cd->Price }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
