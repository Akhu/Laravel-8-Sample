<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @return View
     */
    public function home()
    {
        return "Home";
    }
}
