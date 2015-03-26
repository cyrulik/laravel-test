<?php namespace LaravelTest\Http\Controllers;

use LaravelTest\Http\Requests;
use Socialize;

class AuthController extends Controller {

    /**
     * @return mixed
     */
    public function redirectToProvider()
    {
        return Socialize::with('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialize::with('github')->user();

        var_dump($user);
    }

}
