<?php

// namespace App\Http\Controllers;
// use App\Models\User;
// use Illuminate\Validation\Rule;
// use Illuminate\Validation\Rules\Password;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Http\Request;

// class AuthController extends Controller
// {
//     public function register(Request $request)
//     {
//         $fields = $request->validate([
//             'name'     => ['required', 'max:255'],
//             'email'    => ['required', 'email', Rule::unique('users', 'email')],
//             'password' => ['required', Password::min(6), 'confirmed'],
//         ]);

//         $user = User::create($fields);

//         $token = $user->createToken($request->name);
        
//         return [
//             'user'      => $user,
//             'api_token' => $token->plainTextToken,
//         ];
//     }

//     public function login(Request $request)
//     {
//         $fields = $request->validate([
//             'email'    => ['required', 'email', Rule::exists('users')],
//             'password' => ['required'],
//         ]);

//         $user = User::where('email', $request->email)->first();

//         if(!$user || !Hash::check($request->password, $user->password )){
//             return [
//                 'message ' => 'Email or password is incorrect!', 
//             ];
//         }

//         $token = $user->createToken($user->name);

//         return [
//             'user'      => $user,
//             'api_token' => $token->plainTextToken,
//         ];
//     }

//     public function logout(Request $request)
//     {
//         $request->user()->tokens()->delete();

//         return [
//             'message' => "You've succesfully logged out!",
//         ];
//     }
// }
