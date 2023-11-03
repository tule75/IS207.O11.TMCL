<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WatchController;

class HomeController extends Controller
{
    //
    public function show() {
        $watches = WatchController::index();
        return view('home', [$watches]);
    }
}
