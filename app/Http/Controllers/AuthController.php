<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.auth-pages.landingpage.landing');
    }

    public function login()
    {
        //
        return view('auth.auth-pages.login.login');
    }

    public function register()
    {
        //
        return view('auth.auth-pages.register.register');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function registerSave(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'matric_number' => 'required|string|unique:users,matric_number|max:11',
            'password' => 'required|min:8|confirmed',
        ]);
        User::create([
            'name' => $request['name'],
            'matric_number' => $request['matric_number'],
            'password' => Hash::make($request['password']),
            'role' => 'student',
            'type' => '0',
        ]);

        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    }

    // public function loginAction(Request $request)
    // {
    //     $credentials = $request->only('matric_number', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed, now check user type
    //         if (auth()->user()->role == 'admin') {
    //             return redirect()->route('admindashboard');
    //         } else {
    //             return redirect()->route('userdashboard');
    //         }
    //     } else {
    //         // Redirect back with error if authentication fails
    //         return back()->withErrors([
    //             'password' => 'Invalid matric number or password.',
    //         ])->withInput();

    //         $request->session()->regenerate();
    //     }



    // }
    // public function loginAction(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'matric_number' => 'required|string',
    //         'password' => 'required'
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         if (auth()->user()->isAdmin()) {
    //             return redirect()->route('admindashboard');
    //         }
    //         return redirect()->route('userdashboard');
    //     }

    //     return back()->withErrors([
    //         'password' => 'Invalid matric number or password',
    //     ])->onlyInput('matric_number');
    // }
    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'matric_number' => 'required|string',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admindashboard');
            }

            // Explicitly check for student role
            if ($user->role === 'student') {
                return redirect()->route('userdashboard');
            }

            // Default fallback for any other roles
            return redirect()->route('userdashboard');
        }

        return back()->withErrors([
            'password' => 'Invalid credentials',
        ])->onlyInput('matric_number');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout(); // Logs out the user
        $request->session()->invalidate();       // Invalidate the session
        $request->session()->regenerateToken();
        return redirect('/login')->with('status', 'You have been logged out.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
