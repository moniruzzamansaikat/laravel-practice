<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth() -> attempt((['email' => $request -> email, 'password' => $request -> password]), $request -> has('remember'))){
            return redirect() -> route('todos.index');
        }

        return back() -> with('error', 'Invalid credentials');
    } 
}
