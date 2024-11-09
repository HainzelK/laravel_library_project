<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from books order by title desc');
        }
        else{
            $datas=DB::select('select * from books order by title asc');
        }
        return view('books', compact('datas'));
    }
}
