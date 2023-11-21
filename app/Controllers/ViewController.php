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
}
