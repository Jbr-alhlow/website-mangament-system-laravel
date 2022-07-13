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

        $prodact_list=prodact::all();



        if(!is_null($request->type))

{

    $prodact_list = prodact::where('type',$request->type)->paginate(9)->appends('type',$request->type);


}
else if(!is_null($request->prodactsearch))


{

    $prodact_list  = prodact::where('discripe', 'like', '%'.$request->prodactsearch.'%')->paginate(8)->appends('description', 'like', '%'.$request->prodactsearch.'%');

}

    else{


        $prodact_list = prodact::paginate(9);

    }

    return view('prodact.index',compact('prodact_list'));
}

/* public function prodact(Request $request)
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


} */

public function prodactmange(){
    $prodact_list=DB::table('Prodact')->paginate(9);
    return view('prodact.prodact',compact('prodact_list'));
}
public function show( $id)
{

    $prodact = prodact::find($id);

    if($prodact)
    {
        return view('prodact.show', compact('prodact'));
    }
    else
    {
        return redirect('/prodactmange');
    }
}

public function delete($id)
{
    $item = prodact::find($id);

    if($item)
    {
        prodact::destroy($id);
        return redirect('/prodactmange');
    }
    else
    {
        return redirect('/prodactmange');
    }
}



public function edit($id)
{


    $item = prodact::find($id);

    if($item)
    {
        return view('prodact.edit', compact('item'));
    }
    else
    {
        return redirect('/prodactmange');
    }
}

public function update($id, Request $request)
    {
        $prodact = prodact::find($id);

        if($prodact)
        {

            $request->validate([

                'name' => 'required',
                'price'=> 'required',
                'img'=> 'required',
                'discripe'=> 'required',
                'type'=> 'required',
            ]);

            $prodact->name = $request->name;
            $prodact->price = $request->price;
            $prodact->img = $request->img;
            $prodact->type = $request->type;
            $prodact->discripe = $request->discripe;
            $prodact->save();


            return redirect("/prodact/edit/$prodact->id");}

        else

        return redirect("/prodact/edit/$prodact->id");



}
public function add()
{

    return view('prodact.add');
}

public function store(Request $request)
{
    $request->validate([

        'name' => 'required',
        'price'=> 'required',
        'img'=> 'required',
        'discripe'=> 'required',
        'type'=> 'required',
    ]);



    $item = new prodact();
    $item->name = $request->name;
    $item->img = $request->img;
    $item->price = $request->price;
    $item->discripe = $request->discripe;
    $item->type = $request->type;
    $item->save();

    return redirect('/prodactmange');



}



}
