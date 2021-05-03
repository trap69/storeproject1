<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TableController extends Controller
{
    function show(){
        return view('list');
    }
}
