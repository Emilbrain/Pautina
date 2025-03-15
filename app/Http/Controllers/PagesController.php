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
            $applications = [];
            $fileExists = '';
            $issetApplication = Application::where('user_id', auth()->id())->get();
            foreach ($issetApplication as $application) {
                if($application->status === 'в работе'){
                    $applications = $application;
                }
                $fileExists = $application && $application->answer;
            }



            return view('pages.event', compact('applications', 'fileExists'));
        }
        return view('pages.event');
    }


}
