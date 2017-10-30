<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BuyCreditsController extends Controller
{
    public function index() {
        
        return view('pages.frontend.buy_credits.index');
    }
}
