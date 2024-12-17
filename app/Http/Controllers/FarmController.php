<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmController extends Controller
{
    public function analysis()
    {
        return view('farm-analysis');
    }
}
