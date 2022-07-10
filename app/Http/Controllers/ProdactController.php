<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\User;
use App\prodact;
use Illuminate\Support\Facades\DB;
class ProdactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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

  public function prodact(Request $request)
    {

        $prodact_list=DB::table('Prodact')->paginate(9);



        if(!is_null($request->type))
{
        $prodact_list=DB::table('prodact')->where('type', $request->type);
          $prodact_list = $prodact_list->paginate(9);

          return view('prodact.index',compact('prodact_list'));
}
    else{

         return view('prodact.index',compact('prodact_list'));
    }


}
}
