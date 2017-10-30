<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RankTrackerController extends Controller
{
    public function report_list() {
        
        return view('pages.frontend.rank_tracker.list');
    }

    public function report_add() {
        
        return view('pages.frontend.rank_tracker.add');
    }

    public function report_history() {
        
        return view('pages.frontend.rank_tracker.history');
    }
}
