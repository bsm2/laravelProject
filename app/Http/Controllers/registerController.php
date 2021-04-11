<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    //task
    public function display(){
        return view('register');
    }

    public function storeUser(Request $request){
        $this->validate(request(),[
            'name'=>'required|max:10|min:2|regex:/^[a-zA-Z]*$/',
            'age'=>'required|max:200|numeric',
            'phone'=>'required|numeric',
            'nationalid'=>'required|numeric|digits:14',
            'password'=>'required|digits_between:7,15',
            'address'=>'required|max:30',
            'aboutme'=>'required|max:500|min:50'
        ]);
    }
}
