<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEdnController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
}
