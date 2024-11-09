<?php

namespace App\Http\Controllers;

use App\Models\Cds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CDController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from cds order by title desc');
        }
        else{
            $datas=DB::select('select * from cds order by title asc');
        }
        return view('cds', compact('datas'));
    }
}
