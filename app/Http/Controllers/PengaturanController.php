<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PengaturanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pengaturan');
    }

    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        $request->validate([
            'name' => [
                'required', 
                'max:255'
            ],
            'current_password' => [
                'required',
                'required_with:new_password',

                function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('Current password does not match.');
                    }
                }
            ],
            'new_password' => [
                'required', 'min:6', 'required_with:current_password', 'different:current_password'
            ],
            'password_confirmation' => [
                'required', 'min:6', 'required_with:new_password', 'same:new_password'
            ]
        ]);
        
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $pwd = $request->input('new_password');
        $user->password = Hash::make($pwd);
        $user->save();

        return redirect()->route('pengaturan')->withSuccess('Profile updated successfully.');
    }
}