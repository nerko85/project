<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

  public function __construct(){

    $this->middleware('guest')->except('destroy');

  }

    public function create()
    {
      return view('sessions.create');
    }

    public function store()
    {
      $this->validate(request(),[
        'email' => 'required|email',
        'password' => 'required'
      ]);

      if(auth()->attempt(request(['email','password']))){

          return redirect()->home();

      };

      return back()->withErrors([
          'message' => 'Please check your credentials'
        ]);

    }

    public function destroy()
    {
      auth()->logout();
      return redirect()->home();
    }
}
