<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Register a new user.
     * http://localhost:8000/api/register
     */
    
     public function register(Request $request){
        $validator = validator($request->all(), [
            'username' => 'required| min:3',
       
            'password' => 'required|min:8|confirmed',
            'role' => 'sometimes|in:admin,user'
        ]);

        if($validator->fails()){
            return response()->json([
                'ok' => false,
                'message' => 'Registration Failed',
                'errors' => $validator->errors()
            ], 400);
        }
        
        $user = User::create($validator->validated());
        $user->token = $user->createToken('auth-api')->accessToken;

        return response()->json([
            'ok' => true,
            'message' => 'Registration Success',
            'data' => $user
        ], 201);

     }

     /**
      * Log in a User
      * http://localhost:8000/api/login
      */

      public function login(Request $request){
          $validator = validator($request->all(), [
              'username' => 'required',
              'password' => 'required',
          ]);
  
          if ($validator->fails()) {
            return response()->json([
                'ok' => false,
                'message' => 'Registration Failed',
                'errors' => $validator->errors()
            ], 400);
          }
  
          $credentials = $request->only('username', 'password');
  
          if (auth()->attempt(['email' => $credentials['username'], 'password' => $credentials['password']]) ) {
              $user = auth()->user();
              $user->token = $user->createToken('api-token')->accessToken;
  
              return response()->json([
                'ok' => true,
                'message' => 'Registration Success',
                'data' => $user
            ], 201);
          }
  
          return response()->json([
            'ok' => false,
            'message' => 'Incorrect Username/Email or Password',

        ], 401);
      }
        /**
         * checkToken
         * http://localhost:8000/api/checkToken
         */

         public function checkToken(Request $request){
            return response()->json([
                'ok' => true,
                'message' => 'Token is Valid',
                'data' => $request->user()
            ], 200);
         }
           
         /**
          * Logout A User
          * http://localhost:8000/api/logout
          */

          public function logout(Request $request){
            $request->user()->token()->revoke();
            return response()->json([
                'ok' => true,
                'message' => 'Logout Success'
            ], 200);
          }

}