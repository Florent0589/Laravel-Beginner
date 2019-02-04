<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        // welcome view title
        $title = 'Welcome to e-Register';

        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){

        return view('pages.about');
    }

    public function services(){

        $data = array(
            'title' => 'Services',
            'services' => ['Customer Management', 'Transport Registration', 'Collection Stastics', 'User Control']
        );
        return view('pages.services')->with($data);
    }
}
