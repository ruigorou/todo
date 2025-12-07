<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category');
    }
}
