<?php

namespace App\Http\Controllers;

use App\Models\Organ;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $organs = Organ::latest()->take(4)->get();
        return view('index' , compact('organs'));
    }
}
