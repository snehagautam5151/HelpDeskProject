<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newticket');
    }

    // The following methods are currently not implemented, so they have been removed for now.
}