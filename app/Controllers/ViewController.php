<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ViewController extends BaseController
{
    public function official()
    {
        return view('dashboard/brgyofficial');   
    }

    public function certiReq()
    {
        return view('dashboard/CertifiReq');   
    }

    public function residentinfo()
    {
        return view('dashboard/residentinfo');   
    }

    public function brgycertificate()
    {
        return view('dashboard/brgycertificate');   
    }

    public function announcement()
    {
        return view('dashboard/announcement');   
    }
    
    public function dashboard()
    {
        echo view ('dashboard/dashboard');
    }

    public function home()
    {
        return view ('landingpage/home');
    }

    public function about()
    {
        return view ('landingpage/about');
    }

    
}
