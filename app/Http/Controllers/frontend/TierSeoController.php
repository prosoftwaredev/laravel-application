<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TierSeoController extends Controller
{
    public function index() {
        
        return view('pages.frontend.tier_seo.list');
    }

    public function add() {
        
        return view('pages.frontend.tier_seo.add');
    }
}
