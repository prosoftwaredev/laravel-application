<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TutorialsController extends Controller
{
    public function index() {
        return view('pages.frontend.tutorials.list');
    }
}
