<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('index'); 
    }

    public function registration(Request $request){
        $request->validate([
            'email' => 'email|unique:users',
            'mobile' => 'min:10|unique:users',
            'password' => 'min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        Auth::login($check);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['username'],
        'email' => $data['email'],
        'mobile' => $data['mobile'],
        'password' => Hash::make($data['password'])
      ]);
      
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function login(Request $request)
    {

        $request->validate([
            'password' => 'required|min:6',
        ]);

        $login = $request->input('email');
        $user = User::where('email', $login)->orWhere('mobile', $login)->first();

        if (!$user) {
            $validator['emailPassword'] = 'Email address or password is incorrect.';
            return redirect("/")->withErrors($validator);
        }

        if (Auth::attempt(['email' => $user->email, 'password' => $request->password]) ||
        Auth::attempt(['mobile' => $user->mobile, 'password' => $request->password])) {
        Auth::loginUsingId($user->id);
        return redirect('dashboard');
    } else {
        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect("/")->withErrors($validator);
    }
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}
