<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
   public function index()
   {
      return view('admin.login');
   }

   public function authenticate(Request $request)
   {
      // Validate the request input
      $validator = Validator::make($request->all(), [
         'email' => 'required|email',
         'password' => 'required',
      ]);

      if ($validator->fails()) {
         return back()->withInput($request->only('email'))->withErrors($validator);
      }

      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
         // If successful, redirect to the intended location
         $user = Auth::guard('admin')->user();
         if ($user->role == 'admin') {
            return redirect()->route('admin.dashboard');
         } else {
            Auth::guard('admin')->logout();
            $request->session()->flash('error', 'Either email/password incorrect');
            return redirect()->route('admin.login');
         }
      }

      // If unsuccessful, redirect back with an error message
      return back()->withInput($request->only('email'))->withErrors(['email' => 'Invalid credentials.']);
   }
   public function logout()
   {
      Auth::guard('admin')->logout();
      return redirect()->route('admin.login');
   }
}
