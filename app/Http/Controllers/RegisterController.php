<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
  public function index()
  {
    return view('register.index', [
      'title' => 'Register'
    ]);
  }

  public function registerSubmit(Request $request)
  {
    $validatedData = $request->validate([
      'name' => ['required', 'max:255'],
      'username' => ['required', 'min:3', 'max:255', 'unique:users'],
      'email' => ['required', 'email:dns', 'unique:users'],
      'password' => ['required', 'min:3', 'max:255'],
      'image' => ['image', 'file', 'max:1024']
    ]);

    $credentials = $request->validate([
      'email' => ['required', 'email:dns'],
      'password' => ['required', 'min:3', 'max:255']
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    $validatedData['image'] = 'img/profile.png';

    User::create($validatedData);

    // event(new Registered($validatedData));

    // if (Auth::attempt($credentials)) {
    //   $request->session()->regenerate();
    //   return redirect()->intended('/email/verify');
    // }
  }
}
