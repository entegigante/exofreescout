<?php

namespace Modules\ExoGreetings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ExoGreetingsController extends Controller
{
    /**
     * Display the module index page.
     *
     * @return Response
     */
    public function index()
    {
        return view('exogreetings::index');
    }
}
