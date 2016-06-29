<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show User Profile - view
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.view');
    }

    /**
     * Show User Profile - edit
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('user.edit');
    }

    /**
     * Show User Profile - update
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        // perform update

        // redirect back
    }
}
