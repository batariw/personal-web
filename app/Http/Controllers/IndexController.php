<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $about = \App\About::orderBy('created_at','desc')->first();
        $education = \App\Education::all();
        $act = \App\Activity::all();
        return view('index',compact('about','education','act'));
    }

    public function store(Request $request)
    {
        $pesanindex = new Contact;
    	$pesanindex->create($request->except('_token'));
        
        return redirect(route('index'));
        
    }
}
