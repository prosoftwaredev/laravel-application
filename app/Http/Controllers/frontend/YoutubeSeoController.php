<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\YoutubeCampaign;

class YoutubeSeoController extends Controller
{
    public function index() {
        $youtube_campaigns = YoutubeCampaign::get();
        return view('pages.frontend.youtube_seo.list', array(
            'youtube_campaigns' => $youtube_campaigns
        ));
    }

    public function add() {

        return view('pages.frontend.youtube_seo.add');
    }

    public function add_campaign(Request $request) {
        $camapign_name = $request['campaign_name'];
        $campaign_url = $request['campaign_url'];
        $campaign_keyword = $request['campaign_keyword'];
        $campaign_category = $request['campaign_category'];

        $youtube_campaign = new YoutubeCampaign();

        $youtube_campaign->name = $camapign_name;
        $youtube_campaign->url = $campaign_url;
        $youtube_campaign->keyword = $campaign_keyword;
        $youtube_campaign->category = $campaign_category;

        $youtube_campaign->save();

        return view('pages.frontend.youtube_seo.add');

    }

    public function del_campaign_ajax(Request $request) {

    }
}
