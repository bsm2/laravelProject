<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    //task
    public function display(){
        return view('register');
    }

    public function storeUser(){
        $data = $this->validate(request(),[
            'name'=>'required|max:10|min:2|regex:/^[a-zA-Z]*$/',
            'email'=>'required|email',
            'age'=>'required|max:200|numeric',
            'phone'=>'required|numeric',
            'nationalid'=>'required|numeric|digits:14',
            'password'=>'required|digits_between:7,15',
            'address'=>'required|max:30',
            'aboutme'=>'required|max:500|min:50'
        ]);
        $data['password'] = bcrypt($data['password']);
        $op = User::create($data);
        return redirect('displayusers');
    }

    public function displayUsers(Request $request){
        $data = User::get();
        return view('displayusers',['users_data'=>$data,'title'=>'users']);
    }

    public function deleteUser(Request $request){
        $id= $request->id;
        $op = User::where('id',$id)->delete();
        return redirect('displayusers');
        
    }
}
