<?php namespace LaravelTest\Http\Controllers;

use LaravelTest\Http\Requests;

class EditorController extends Controller {

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('editor/raptor');
    }

}
