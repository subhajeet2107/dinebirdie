<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		//$var = Twitter::getSearch(['q'=>'messi','count'=>10]);
		//Dineout events URL
		$url = "http://www.dineout.co.in/api/get_event_list/?city_id=0";
		$data = [];
		$client = new GuzzleHttp\Client();
		$response = $client->get($url);
		$data['events'] =  $response->json();
		$data['events'] = $data['events']['output_params']['data']['event_data'];
		return View::make('main')->with('events',$data);
	}

}
