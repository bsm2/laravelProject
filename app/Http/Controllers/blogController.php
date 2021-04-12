<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\blog;

class blogController extends Controller
{
    

    public function createBlog(Request $request){
        $data = $this->validate(request(),[
            'title'=>'required|max:10|min:2|regex:/^[a-zA-Z]*$/',
            'content'=>'required|max:500|min:50'
        ]);
        blog::create($data); 
    }
    public function displayForm(){
        

        return view('createBlog');
    }



    public function display(){
        $data = blog::get();

        return view('blogDetails',['data'=>$data]);
    }
}
