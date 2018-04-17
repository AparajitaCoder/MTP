<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;

class HomeController extends Controller
{
    public function __construct()
    {                
        $this->middleware('guest');
    }
    
    public function index() {
        
        $ideas = Idea::where('publish',1)->where('approve',1)->where('active',1)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->get();
        return view('user.index', compact('ideas'));
    }
    
    public function thanks() {
        return view('user.thanks');
    }
}
