<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewProfile()
    {
        return view('pages.profile__information');
    }
    public function viewProfileEdit()
    {
        return view('pages.profile__edit');
    }
}
