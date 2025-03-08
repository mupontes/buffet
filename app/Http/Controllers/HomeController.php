<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $images = Gallery::latest()->take(6)->get(); // Pegamos as 6 últimas imagens
        return view('home', compact('images'));
    }
}
