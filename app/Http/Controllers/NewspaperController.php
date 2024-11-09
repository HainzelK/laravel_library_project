<?php

namespace App\Http\Controllers;

use App\Models\Newspapers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewspaperController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from newspapers order by title desc');
        }
        else{
            $datas=DB::select('select * from newspapers order by title asc');
        }
        return view('newspapers', compact('datas'));
    }
}
