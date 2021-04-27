<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    
    public function store(Request $request){
        
        $data = $this->validate(request(),[
            'name'=>'required|max:10|min:2|regex:/^[a-zA-Z]*$/',
            'email'=>'required|email',
            'password'=>'required|digits_between:7,15',
        ]);
        $data['password'] = bcrypt($data['password']);
        $op = student::create($data);
        return response()->json([],200);
    }
}
