<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function welcome()
    {
        return view('interface.welcome');
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

    public function segment()
    {
        return view('interface.segment');
    }

    public function superiority()
    {
        return view('interface.superiority');
    }

    public function contact()
    {
        return view('interface.contact');
    }
}
