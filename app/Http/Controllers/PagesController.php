<?php

namespace App\Http\Controllers;

use App\Models\Application;
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

    public function viewEvent()
    {
        if (auth()->check()) {
            $issetApplication = Application::where('user_id', auth()->id())->first();
            $fileExists = $issetApplication->answer ?? 'true';
            return view('pages.event', compact('issetApplication', 'fileExists'));

        }
        return view('pages.event');
    }


}
