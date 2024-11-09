<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucfirst($category) }} Catalogue</title>
</head>
<body>
<h1>{{ ucfirst($category) }} Catalogue</h1>

<a href="{{ route('catalogue.category', ['category' => $category, 'sort' => $sort == 'asc' ? 'desc' : 'asc']) }}">
    Sort: {{ $sort == 'asc' ? 'Ascending' : 'Descending' }}
</a>

<div>
    <table>
        <tr>
            <th>Title</th>
            @if($category == 'books' || $category == 'journals' || $category == 'newspapers' || $category == 'skripsis')
                <th>Author</th>

            @endif
            @if($category == 'books' || $category == 'journals' || $category == 'skripsis')
                <th>Publisher</th>
            @endif

            @if($category == 'cds')
                <th>Artist</th>
            @endif
            <th>Year Published</th>
            @if($category == 'books' || $category == 'journals' || $category == 'newspapers'|| $category == 'skripsis')
                <th>Pages</th>
            @endif
            @if($category == 'books')
                <th>Description</th>
            @endif
            @if($category == 'journals' || $category == 'skripsis')
                <th>Abstract</th>
            @endif
            @if($category == 'cds')
                <th>Duration</th>
            @endif
            <th>Price</th>
        </tr>
        @foreach($items as $item) 
        <tr>
            <td>{{ $item->Title }}</td>
            @if($category == 'books' || $category == 'journals' || $category == 'newspapers' || $category == 'skripsis')
                <td>{{ $item->Author }}</td>

            @endif
            @if($category == 'books' || $category == 'journals' || $category == 'skripsis')
                <td>{{ $item->Publisher }}</td>

            @endif
            @if($category == 'cds')
                <th>{{ $item->Artist }}</th>
            @endif
            <td>{{ $item->Year_Published }}</td>

            @if($category == 'books' || $category == 'journals' || $category == 'newspapers'|| $category == 'skripsis')
                <td>{{ $item->Pages }}</td>
            @endif
            @if($category == 'books')
                <td>{{ $item->Description }}</td>
            @endif
            @if($category == 'journals' || $category == 'skripsis')
                <td>{{ $item->Abstract }}</td>
            @endif
            @if($category == 'cds')
                <td>{{ $item->Duration }}</td>
            @endif
            <td>{{ $item->Price }}</td>
        </tr>
        @endforeach
    </table>
</div>

<a href="{{ route('catalogue.index') }}">Back to Catalogue</a>

</body>
</html>
