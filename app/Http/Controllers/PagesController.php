<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function news() {
        return view('pages.news');
    }
    
    public function post() {
        return view('pages.post');
    }

    public function service() {
        return view('pages.service');
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }
}
