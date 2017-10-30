<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TrainStrategyController extends Controller
{
    public function index() {
        return view('pages.frontend.train_strategy.list');
    }
}
