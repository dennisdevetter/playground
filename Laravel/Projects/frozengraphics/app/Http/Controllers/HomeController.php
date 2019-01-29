<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = [
            'Go to the store',
            'Go to the market',
            'Go to work'
        ];

        return view('home')->with([
            'tasks' => $tasks
        ]);
    }
}
