<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function index(Request $request, $type) {     
        
        $static = Page::where('slug', $type)->first();       
        if( $static ){  
            //$static = $static['0'];
            return view('user.static', compact('static'));
        }else{           
            return response()->json(['error' => trans('Invalid URL')], 400);            
        }      
    }
}
