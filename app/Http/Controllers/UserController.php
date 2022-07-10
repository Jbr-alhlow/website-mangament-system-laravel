<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {

        $users_list = DB::table('users')->paginate(8);
    	return view('users.index', compact('users_list'));
    }

    public function show($id)
    {

        $user = User::find($id);

        if($user)
        {
            return view('users.show', compact('user'));
        }
        else
        {
            return redirect('/users/index');
        }
    }

    public function delete($id)
    {
        $user = User::find($id);

        if($user)
        {
            if(Auth::user()->id == $user->id)
                return redirect('/users/index');
            else
                {
                    User::destroy($id);
                    return redirect('/users/index');
                }
        }
        else
        {
            return redirect('/users/index');
        }
    }



    public function edit($id)
    {

        $user = User::find($id);

        if($user)
        {
            return view('users.edit', compact('user'));
        }
        else
        {
            return redirect('/users/index');
        }
    }




    public function update($id, Request $request)
    {
        $user = User::find($id);

        if($user)
        {
            $request->validate([
                'email' => 'required|max:50|unique:users,email,'.$user->id,
                'name' => 'required',
                'password' => 'nullable|confirmed|min:8',
            ]);

            $user->name = $request->name;
            $user->email = $request->email;

            if($request->password)
            {
                $user->password = bcrypt($request->password);
            }

            $user->save();
            return redirect('/users/index');


        }
        else
        {
            return redirect('/users/index');
        }

    }


    public function add()
    {
        return view('users.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|max:50|unique:users,email',
            'name' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return redirect('/users/index');

    }

}
