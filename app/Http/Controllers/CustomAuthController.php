<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      

    public function customLogin(Request $request)
    {
        //$request->validate([
        //    'email' => 'required',
        //    'password' => 'required',
        //]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("/login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.register');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        // line ni sus

        $data = $request->all(); //implicit 
        $check = $this->create($data); // eloquent 

        // $check = $data::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
         
        return redirect('/dashboard')->withSuccess('You have signed-in');
    }


    // public function customRegistration(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => ['required|min:6']
    //     ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect(RouteServiceProvider::HOME);
    // }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function dashboard()
    {
        if (Auth::check()) {
            return view('pages.dashboard');
        }
  
        return redirect("/login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/login');
    }
}