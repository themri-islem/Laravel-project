<?php

namespace App\Http\Controllers;
use App\Models\Organizer;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $org=organizer::all();
        return view ('welcome',compact('org'));
    }

}
