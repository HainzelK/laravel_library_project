<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cd;
use App\Models\Journal;
use App\Models\Newspaper;
use App\Models\Skripsi;

class CatalogueController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'asc');
        $books = Book::orderBy('Title', $sort)->get();
        $cds = Cd::orderBy('Title', $sort)->get();
        $journals= Journal::orderBy('Title', $sort)->get();
        $newspapers = Newspaper::orderBy('Title', $sort)->get();
        $skripsis = skripsi::orderBy('Title', $sort)->get();

        return view('catalogue.index', compact('books', 'cds', 'journals','newspapers', 'skripsis', 'sort'));
    }

    public function showCategory($category, Request $request)
    {
        $sort = $request->get('sort', 'asc');
        $items = match ($category) {
            'books' => book::orderBy('Title', $sort)->get(),
            'cds' => cd::orderBy('Title', $sort)->get(),
            'journals' => journal::orderBy('Title', $sort)->get(),
            'newspapers' => newspaper::orderBy('Title', $sort)->get(),
            'skripsis' => skripsi::orderBy('Title', $sort)->get(),
            default => abort(404),
        };

        return view('catalogue.category', compact('items', 'category', 'sort'));
    }
}
