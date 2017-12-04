<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class APIUserController extends APIController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('client');
    }

    public function index()
    {
        $response = array("users" => User::all());
        return $this->jsonToUTF($response);
    }
}
