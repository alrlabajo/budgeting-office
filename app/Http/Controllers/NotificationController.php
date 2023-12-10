<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class NotificationController extends Controller
{
    public function view()
    {
        return view('notifications');
    }

}

