<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Library Catalogue</h1>

<a href="{{ route('catalogue.index', ['sort' => $sort == 'asc' ? 'desc' : 'asc']) }}">
    Sort: {{ $sort == 'asc' ? 'Ascending' : 'Descending' }}
</a>

<h2>Categories</h2>
<ul>
    <li><a href="{{ route('catalogue.category', ['category' => 'books', 'sort' => $sort]) }}">Books</a></li>
    <li><a href="{{ route('catalogue.category', ['category' => 'cds', 'sort' => $sort]) }}">CDs</a></li>
    <li><a href="{{ route('catalogue.category', ['category' => 'journals', 'sort' => $sort]) }}">Journals</a></li>
    <li><a href="{{ route('catalogue.category', ['category' => 'newspapers', 'sort' => $sort]) }}">Newspapers</a></li>
    <li><a href="{{ route('catalogue.category', ['category' => 'skripsis', 'sort' => $sort]) }}">Skripsi</a></li>
</ul>

<h3>All Items</h3>

<div>
    <h4>Books</h4>
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
        @foreach($books as $book) 
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


    <h4>CDs</h4>
    <table>
        <tr>
            <th>Title</th>
            <th>Artist</th>
            <th>Year Published</th>
            <th>Duration</th>
            <th>Price</th>
        </tr>
        @foreach($cds as $cd) 
        <tr>
            <td>{{ $cd->Title }}</td>
            <td>{{ $cd->Artist }}</td>
            <td>{{ $cd->Year_Published }}</td>
            <td>{{ $cd->Duration }}</td>
            <td>{{ $cd->Price }}</td>
        </tr>
        @endforeach
    </table>
    
    <h4>Journals</h4>
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
        @foreach($journals as $journal) 
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

    <h4>Newspapers</h4>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year Published</th>
            <th>Pages</th>
            <th>Price</th>
        </tr>
        @foreach($newspapers as $newspaper) 
        <tr>
            <td>{{ $newspaper->Title }}</td>
            <td>{{ $newspaper->Author }}</td>
            <td>{{ $newspaper->Year_Published }}</td>
            <td>{{ $newspaper->Pages }}</td>
            <td>{{ $newspaper->Price }}</td>
        </tr>
        @endforeach
    </table>

    <h4>Skripsi</h4>
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
        @foreach($skripsis as $skripsi) 
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
</div>
</body>
</html>
   

