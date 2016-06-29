<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ParameterBag;

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
    public function index(Request $request, $id)
    {
        $user = User::find( $id );
        if ( !$user ) {
            return response( "User not found", 401 );
        }

        return view('user.view', ['user' => $user]);
    }

    /**
     * Show User Profile - edit
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $user = User::find( $id );
        if ( !$user ) {
            return response( "User not found", 401 );
        }

        return view('user.edit', ['user' => $user]);
    }

    /**
     * Show User Profile - update
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find( $id );
        if ( !$user ) {
            return response( "User not found", 401 );
        }

        $params = new ParameterBag( $request->input() );

        $user->height = $params->get('height');
        $user->weight = $params->get('weight');
        $user->dob = $params->get('dob');
        $user->save();

        return view('user.view', ['user' => $user]);
    }
}
