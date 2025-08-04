<?php

namespace App\Http\Controllers;

use App\Models\reviews;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function welcome()
    {
        $reviews = reviews::latest()->get();
        return view('interface.welcome' , compact('reviews'));
    }

    public function about()
    {
        return view('interface.about');
    }

    public function service()
    {
        return view('interface.service');
    }

    public function partner()
    {
        return view('interface.partner');
    }

    public function picture()
    {
        return view('interface.galery');
    }

    public function article()
    {
        return view('interface.article');
    }

    public function file()
    {
        return view('interface.jurnal');
    }


    public function contact()
    {
        $reviews = reviews::latest()->get();
        return view('interface.contact' , compact('reviews'));
    }
}
