<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() // nama function = index
    {
        return view('landing'); // nama file landing.blade.php
    }
}
