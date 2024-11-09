<?php

namespace App\Http\Controllers;

use App\Models\Skripsis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkripsiController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from skripsis order by title desc');
        }
        else{
            $datas=DB::select('select * from skripsis order by title asc');
        }
        return view('skripsis', compact('datas'));
    }
}
