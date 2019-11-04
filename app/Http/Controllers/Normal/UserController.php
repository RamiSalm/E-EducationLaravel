<?php

namespace App\Http\Controllers\Normal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch(Auth::user()->access){
            case 1:return redirect('ministry/home');break;
            case 2:return redirect('directorate/home');break;
            case 3:return redirect('school/home');break;
            case 4:return redirect('teacher/home');break;
            case 5:return redirect('student/home');break;
            case 6:return redirect('father/home');break;
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create()
    {
        return view('auth/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
        $user=new User;
        
        $user->name    =$request->input('name');
        $user->email   =$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->access   =$request->input('access');
        $user->save();

        
        switch($request->input('access')){
            case 1:return redirect('ministry/home');break;
            case 2:return redirect('directorate/home');break;
            case 3:return redirect('school/home');break;
            case 4:return redirect('teacher/home');break;
            case 5:return redirect('student/home');break;
            case 6:return redirect('father/home');break;
        }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
