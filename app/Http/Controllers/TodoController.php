<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\User;
use Auth;

class TodoController extends Controller
{
/*    public function index()
    {
 		$list = Todo::with('user')->get();
		return view('todo.index', compact('list'));
    }
*/
    public function index(Request $request)
    {

        $users = User::all();

        $list = Todo::with('user');
        $list = $list->paginate(8);
/*        if($request->user)
            $list = $list->where('user_id', $request->user);*/

        if(!is_null($request->status))
        {

            if($request->status != -1)

            $list=Todo::with('user')->where('status' ,$request->status)->paginate(9)->appends('status', $request->status);




        }

        if($request->user)
            if(!in_array(0, $request->user)){
                $list = Todo::with('user')->whereIn('user_id', $request->user)->paginate(8)->appends('user_id', $request->user);

            }
        if($request->description){

            $list = Todo::with('user')->where('description', 'like', '%'.$request->description.'%')->paginate(8)->appends('description', 'like', '%'.$request->description.'%');

        }

        if($request->name){
            $list = $list->where('name', 'like', '%'.$request->name.'%');

/*        dd($list->toSql());*/
        $list = $list->orderby('user_id', 'desc')->orderby('created_at', 'desc');
        $list = $list->paginate(8)->appends('name', 'like', '%'.$request->name.'%');
        }

        return view('todo.index', compact('list', 'users'));

    }

    public function show($id, Request $request)
    {

        $item = Todo::with(['user', 'comments'])->find($id);


        if($item)
        {
/*            if(Auth::user()->id != $item->user_id)
                return redirect('/mytasks');*/
            return view('todo.show', compact("item"));
        }
        else
        {
            return redirect('/todo/index');
        }
    }

    public function delete($id)
    {
        $item = Todo::find($id);

        if($item)
        {
            Todo::destroy($id);
            return redirect('/todo/index');
        }
        else
        {
            return redirect('/todo/index');
        }
    }

    public function edit($id)
    {
        $users_list = User::all();

        $item = Todo::find($id);

        if($item)
        {
            return view('todo.edit', compact("item", 'users_list'));
        }
        else
        {
            return redirect('/todo/index');
        }
    }

    public function update($id, Request $request)
    {
        $item = Todo::find($id);

        if($item)
        {
            $request->validate([
                'name' => 'required|min:6',
                'description' => 'required|min:20',
            ]);

            $item->name = $request->name;
            $item->user_id = $request->user_id;
            $item->description = $request->description;

            $item->save();
            return redirect('/todo/index');


        }
        else
        {
            return redirect('/todo/index');
        }

    }

    public function add()
    {
        $users = User::all();
    	return view('todo.add', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6',
            'description' => 'required|min:20',
        ]);

        $item = new Todo();
        $item->name = $request->name;
        $item->user_id = $request->user_id;
        $item->status = 0;
        $item->description = $request->description;
        $item->save();

        return redirect('/todo/index');



    }

    public function mytasks()
    {
        $list = Todo::with('user')->where('user_id', '=', Auth::user()->id)->paginate(8)->appends('user_id', '=', Auth::user()->id);

        return view('dashboard.mytasks', compact('list'));
    }


/*    public function ddd()
    {
        $user = User::first();
        $user->password = bcrypt('123123');
        $user->save();
        dd('done');
    }*/
}
