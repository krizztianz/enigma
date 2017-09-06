<?php

namespace Enigma\Modules\Core\Http\Controllers\Profile;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    /**
     * Display homepage.
     * 
     * @return Response
     */
    public function index()
    {
        return view('core::pages.profile.profile');
    }
}
