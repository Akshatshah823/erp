<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required',
            'password' =>'required',
        ]);
        // dd($request);
        $user = User::where('email', $request->email)->orWhere('password', $request->password)->first();
        
        if ($user && Hash::check($request->email, $user->password)) {
            dd($request);
            Auth::login($user);
            
            return redirect('/dashboard')->with('success', 'Login successful!');
        } else {
            
            return redirect()->back()->with(['success','Invalid credentials']);
        }
    }
}
