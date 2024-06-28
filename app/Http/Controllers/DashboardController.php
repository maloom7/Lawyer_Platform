<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // تأكد من أن العرض الموجود هو dashboard.blade.php
    }
}
