<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
  public function index()
{
    return response()->json(User::all(), 200);
}

    public function store(Request $request)
    {
        try {
            $request->validate([
                "first_name" => "required|string",
                "last_name" => "required|string",
                "email" => "required|email|unique:users",
                "password" => "required|string|min:8"
            ]);

            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
    
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return response()->json(["message" => "User created successfully"], 201);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    public function show(string $id)
    {
        return response()->json(User::findOrFail($id), 200);
    }

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                "first_name" => "required|string",
                "last_name" => "required|string",
                "email" => "required|email|unique:users,email," . $id,
                "password" => "required|string|min:8"
            ]);

            $user = User::findOrFail($id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
        
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return response()->json(["message" => "User updated successfully"], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            User::findOrFail($id)->delete();
            return response()->json(["message" => "User deleted successfully"], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|string|email|unique:users',
            'password'   => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
        
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User registered successfully'], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type'   => 'Bearer',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out']);
    }

 
    public function user(Request $request)
{
    return response()->json($request->user());
}

}
