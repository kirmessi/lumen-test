<?php

namespace App\Http\Controllers;
use app\http\model\User;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function example()

    {   
        $user = new User;
        $users = $user->get(); 
         return view('about', compact('users'));
    }
    //
}
