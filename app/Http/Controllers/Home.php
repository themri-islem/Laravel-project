<?php

namespace App\Http\Controllers;
use App\Models\Organizer;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $Tweet=organizer::all();
        
        return view ('welcome',compact('Tweet'));
    }

}
