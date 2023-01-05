<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    //For Home Page of the CMS and show data
    public function index()
    {
        $users = Users::all();
        $data=compact('users');
        return view('home')->with($data);
    }
    
    //For redirecting to the create regisration page
    public function create()
    {
        $url = url('/');
        $data=compact('url');
        return view('create')->with($data);
    }

    //For inserting query in db
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $users = New Users;
        $users -> name = $request['name'];
        $users -> email = $request['email'];
        $users -> address = $request['address'];
        $users -> password = md5($request['password']);
        $users -> save();
        return redirect('/');
    }

    //Delete the query from the db
    public function delete($id)
    {
    Users::find($id) -> delete();
    return redirect() -> back();
    }

    //Takes to the create table with the id for updating
    public function edit($id)
    {
        $users = Users::find($id);
        $url = url('/create/update')."/".$id;
        $data = compact('users','url');
        return view('create') -> with($data); 
    }
    
    //Updates the id which have been altered
    public function update($id, Request $request)
    {
        $users = Users::find($id);
        $users -> name = $request['name'];
        $users -> email = $request['email'];
        $users -> address = $request['address'];
        $users -> password = md5($request['password']);
        $users -> save();
        return redirect('/');
    }
}