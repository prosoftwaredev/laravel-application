<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => '/'], function () {

	Route::get('/', function () {
		return view('pages/frontend/dashboard');
	});

	Route::group(['prefix' => 'youtube_seo'], function () {
		Route::get('/', [
		   'as' => 'youtube_seo', 'uses' => 'frontend\YoutubeSeoController@index'
		]);
		Route::get('/add', [
		   'as' => 'youtube_seo/add', 'uses' => 'frontend\YoutubeSeoController@add'
		]);
		Route::match(['get', 'post'], '/add_campaign', [
		   'as' => 'youtube_seo/add_campaign', 'uses' => 'frontend\YoutubeSeoController@add_campaign'
		]);
		Route::match(['get', 'post'], '/del_campaign_ajax', [
		   'as' => 'youtube_seo/del_campaign_ajax', 'uses' => 'frontend\YoutubeSeoController@del_campaign_ajax'
		]);
	});

	Route::group(['prefix' => 'amazon_seo'], function () {
		Route::get('/', [
		   'as' => 'amazon_seo', 'uses' => 'frontend\AmazonSeoController@index'
		]);
		Route::get('/add', [
		   'as' => 'amazon_seo/add', 'uses' => 'frontend\AmazonSeoController@add'
		]);
		Route::match(['get', 'post'], '/add_ajax', [
		   'as' => 'amazon_seo/add_ajax', 'uses' => 'frontend\AmazonSeoController@add_ajax'
		]);
	});

	Route::group(['prefix' => 'website_seo'], function () {
		Route::get('/', [
		   'as' => 'website_seo', 'uses' => 'frontend\WebsiteSeoController@index'
		]);
		Route::get('/add', [
		   'as' => 'website_seo/add', 'uses' => 'frontend\WebsiteSeoController@add'
		]);
		Route::match(['get', 'post'], '/add_ajax', [
		   'as' => 'website_seo/add_ajax', 'uses' => 'frontend\WebsiteSeoController@add_ajax'
		]);
	});

	Route::group(['prefix' => 'google_map_seo'], function () {
		Route::get('/', [
		   'as' => 'google_map_seo', 'uses' => 'frontend\GoogleMapSeoController@index'
		]);
		Route::get('/add', [
		   'as' => 'google_map_seo/add', 'uses' => 'frontend\GoogleMapSeoController@add'
		]);
		Route::match(['get', 'post'], '/add_ajax', [
		   'as' => 'google_map_seo/add_ajax', 'uses' => 'frontend\GoogleMapSeoController@add_ajax'
		]);
	});

	Route::group(['prefix' => 'rss_feed_seo'], function () {
		Route::get('/', [
		   'as' => 'rss_feed_seo', 'uses' => 'frontend\RssFeedSeoController@index'
		]);
		Route::get('/add', [
		   'as' => 'rss_feed_seo/add', 'uses' => 'frontend\RssFeedSeoController@add'
		]);
		Route::match(['get', 'post'], '/add_ajax', [
		   'as' => 'rss_feed_seo/add_ajax', 'uses' => 'frontend\RssFeedSeoController@add_ajax'
		]);
	});

	Route::group(['prefix' => 'tier_seo'], function () {
		Route::get('/', [
		   'as' => 'tier_seo', 'uses' => 'frontend\TierSeoController@index'
		]);
		Route::get('/add', [
		   'as' => 'tier_seo/add', 'uses' => 'frontend\TierSeoController@add'
		]);
		Route::match(['get', 'post'], '/add_ajax', [
		   'as' => 'tier_seo/add_ajax', 'uses' => 'frontend\TierSeoController@add_ajax'
		]);
	});

	Route::group(['prefix' => 'report'], function () {
		Route::get('/list', [
		   'as' => 'report/list', 'uses' => 'frontend\RankTrackerController@report_list'
		]);
		Route::get('/add', [
		   'as' => 'report/add', 'uses' => 'frontend\RankTrackerController@report_add'
		]);
		Route::get('/history', [
		   'as' => 'report/history', 'uses' => 'frontend\RankTrackerController@report_history'
		]);
	});

	Route::group(['prefix' => 'tutorials'], function () {
		Route::get('/', [
		   'as' => 'tutorials', 'uses' => 'frontend\TutorialsController@index'
		]);
	});

	Route::group(['prefix' => 'train_strategy'], function () {
		Route::get('/', [
		   'as' => 'train_strategy', 'uses' => 'frontend\TrainStrategyController@index'
		]);
	});

	Route::group(['prefix' => 'buy_credits'], function () {
		Route::get('/', [
		   'as' => 'buy_credits', 'uses' => 'frontend\BuyCreditsController@index'
		]);
	});

});
