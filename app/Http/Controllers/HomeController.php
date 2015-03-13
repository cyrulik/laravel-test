<?php namespace LaravelTest\Http\Controllers;

use LaravelTest\Http\Requests;

/**
 * Class HomeController
 *
 * @package LaravelTest\Http\Controllers
 */
class HomeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home/home');
	}
}
