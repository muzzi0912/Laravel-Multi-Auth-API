<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validation logic if needed

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Assign the 'user' role to the newly registered user
        $user->roles()->attach(Role::where('name', 'user')->first());

        return response()->json(['message' => 'User registered successfully'], 201);
    }

    public function Login(Request $request)
    {
        // Validate login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Check user role after successful login
            $user = User::where('email', $request->email)->first();

            if ($user->hasRole('admin')) {
                // Return JSON response for admin
                return response()->json(['role' => 'admin', 'message' => 'Admin login successful']);
            } elseif ($user->hasRole('user')) {
                // Return JSON response for user
                return response()->json(['role' => 'user', 'message' => 'User login successful']);
            } else {
                // Handle other roles as needed
                return response()->json(['role' => 'other', 'message' => 'Login successful']);
            }
        }

        // Handle failed login
        return response()->json(['error' => 'Invalid credentials'], 401);
    }
}
