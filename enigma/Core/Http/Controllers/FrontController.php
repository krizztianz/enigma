<?php

namespace Enigma\Modules\Core\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class FrontController extends Controller
{
    /**
     * Display homepage.
     * 
     * @return Response
     */
    public function index()
    {
        return view('core::pages.front.index');
    }
}
