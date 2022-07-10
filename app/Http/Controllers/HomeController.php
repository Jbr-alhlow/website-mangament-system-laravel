<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 /*    public function index()
    {
        return view('home');
    } */


    public function index1()
    {
        
        $users = User::all();
        
        $list = Todo::with('user');
        $list = $list->get();
/*        if($request->user)
            $list = $list->where('user_id', $request->user);*/
            return view('home', compact('list', 'users'));
}
}
