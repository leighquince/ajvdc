<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}


	public function about()
	{
		return view('about');
	}



	public function whatWeDo()
	{
		return view('what_we_do');
	}



	public function entrepreneurship()
	{
		return view('entrepreneurship');
	}



	public function engagement()
	{
		return view('engagement');
	}



	public function howToHelp()
	{
		return view('how_to_help');
	}



	public function successStories()
	{
		return view('success_stories');
	}

	

	public function photovoici()
	{
		return view('photovoici');
	}	

	public function partners()
	{
		return view('partners');
	}

}
