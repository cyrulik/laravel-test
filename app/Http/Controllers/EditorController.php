<?php namespace VictoriaPlum\Http\Controllers;

use VictoriaPlum\Http\Requests;

class EditorController extends Controller {

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('editor/raptor');
    }

}
