<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        return $request->all();
    }
    public function edit(string $id){
        $date['id'] = $id;
        return view('users.edit', $data);
    }
    public function show(string $id){
        $date['id'] = $id;
        return view('users.show', $data);
    }
    public function update(Request $request, string $id){
        return $request->all();
    }
    public function delete(string $id){
        return 'delete data with the id of' . $id;
    }
}
