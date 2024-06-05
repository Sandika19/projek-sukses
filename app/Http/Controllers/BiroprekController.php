<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiroprekController extends Controller
{
    public function index()
    {
        return view('biroprek.dashboard', [
            'title' => 'Biroprek|Dashboard'
        ]);
    }
}
