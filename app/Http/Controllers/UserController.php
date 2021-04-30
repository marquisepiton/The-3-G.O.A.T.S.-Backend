<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Get all users 
    public function index()
    {
        return User::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
//       $user = new User();
//       $user->fanOf = $request->fanOf;
//       $user->picture = $request->picture; 
//       $user->favoriteTeam = $request->favoriteTeam;
        
      $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:64',
            'password' => 'required|string',
            'username' => 'required|string|min:8',
        ]);   
      if($validator->fails()){
            return response(['message' => 'Validation errors', 'errors' =>  $validator->errors(), 'status' => false], 422);
        }
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        
        // Creating new user
        $user = User::create($input);
        
        /**Your user authentication access token is generated here **/
        $data['token'] =  $user->createToken('The3Goats')->accessToken;
        $data['user_data'] = $user;
        
        return response(['data' => $data, 'message' => 'Account created successfully!', 'status' => true]);
      
//       $user->save();
//        return User::all();
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
      
      //$user = User::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
//     public function (User $id)
//     {
    
//     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
        $user= User::find($id);
        $user->username = 'username';
        $user->save();
       return User::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       User::destroy($id);
       return User::all();
    }
}