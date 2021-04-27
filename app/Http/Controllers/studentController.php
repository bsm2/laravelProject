<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = student::get();
        return view('students.students',['students' => $data,'title'=>'Students']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.add',['title'=> 'add']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request(),[
            'name'=>'required|max:10|min:2|regex:/^[a-zA-Z]*$/',
            'email'=>'required|email',
            'password'=>'required|digits_between:7,15',
        ]);
        $data['password'] = bcrypt($data['password']);
        $op = student::create($data);
        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = student::findOrFail($id);
        return view('students.edit',['data' => $data,'title' => 'Edit Student']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =  $this->validate(request(),[
            'name'     => 'required|min:5|max:10',
            'email'    => 'required|email',
        ]);

        $op = student::where('id',$id)->update($data);
    
        if($op){
        $message =  'updated';
        }else{
        $message =  'error in update';
        }

        session()->flash('Message',$message);

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $op =   student::where('id',$id)->delete();

        if($op){
            $message = "user Deleted";
        }else{
            $message = "error in deleting user";
        }
        session()->flash('Message',$message);


        return redirect(url('student'));
    }

    public function login(){

        return view('students.login',['title' => 'Login']);

    }

    public function dologin(Request $request){

        // logic 

        $data = $this->validate(request(),[
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        

        $check = auth()->guard('student')->attempt($data,true);

        if($check){
            return redirect(url('student'));
        }else{
        
            session()->flash('Message','Password || email Invalid');
            return redirect(url('login'));
        }
    }

    public function logout(){

        auth()->logout();
        
        return redirect(url('Login'));

    }
}
