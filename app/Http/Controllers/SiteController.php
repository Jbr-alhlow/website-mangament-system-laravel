<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inbox;
use Validator;
use Auth;

class SiteController extends Controller
{
    public function send_message(Request $request)
    {


       $validator = Validator::make($request->all(), [
            'name' => 'required|min:6',
            'body' => 'required|min:20',
            'email' => 'required|min:10',
            'phone' => 'required|min:10',
        ]);
       
        if ($validator->fails()) {
        	return redirect('/#contact')->withErrors($validator->errors());

		}

    	$message = new Inbox();
    	$message->name = $request->name;
    	$message->email = $request->email;
    	$message->phone = $request->phone;
    	$message->body = $request->body;
    	$message->save();

    	return redirect('/');
    }


    public function inbox_index()
    {

        $inbox_list = Inbox::all();
        return view('inbox', compact('inbox_list'));
    }



    public function inbox_show($id) 
    {
        $inbox_object = Inbox::find($id)        ;

        if($inbox_object)
        {
            return view('inbox_show', compact('inbox_object'));
        }
        else
        {
            return redirect('/inbox');
        }
    }



    public function upload_image_form()
    {
        return view('upload_image_form');
    }

    public function store_image(Request $request)
    {
        if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('images/services'), $filename);
        //$service->image = $request->file('image')->getClientOriginalName();
    }

        dd($request->all())   ;
    }
















}



