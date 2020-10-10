<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function __invoke()
    {
        // return 'Todo list';
        return Todo::all();
    }
}
