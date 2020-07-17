<?php

namespace App\Http\Controllers;

use App\Notifications\Announcement;
use App\Notifications\Newsteller;
use App\Notifications\QuesAnswered;
use App\Notifications\WelcomeUser;
use \Illuminate\Notifications\Notifiable;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin');
    }
    
}

