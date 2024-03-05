<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class signUpController extends Controller
{
    public function newReg(){
        return view('signup');
    }
    public function storeuser(Request $request)
{
    //new Signup
    $rules = [
        'name' => 'required',
        'password' => 'required',
        'email' => 'required',
        'designation' => 'required',
        'gender' => 'required',
        'dob' => 'required',
        'country'=>'required',
        'favourite_color' => 'required',
        'favourite_actor' => 'required',
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
    ];
    $messages = [
        'name.required' => 'User  Name is required',
        'password.required' => 'Please Creat the Password',
        'email.required' => 'email is required',
        'designation.required' => 'designation is required',
        'gender.required' => 'gender is required',
        'dob.required' => 'dob is required',
        'country.required' => 'country is required',
        'favourite_color.required' => 'favourite_color is required',
        'favourite_actor.required' => 'favourite_actor is required'
    ];

 $validator = Validator::make(request()->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()->first()]);
        }


        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = $request->input('name').'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); 
            $finalData['profile_image'] = 'images/'.$imageName; // Store the path in the database
        }

        $finalData = [];
        $finalData['name'] =  $request->input('name');
        $finalData['password'] = md5($request->input('password'));
        $finalData['email'] = $request->input('email');
        $finalData['dob'] = $request->input('dob');
        $finalData['designation'] =  $request->input('designation');
        $finalData['country'] =  $request->input('country');
        $finalData['gender'] = $request->input('gender');
        $finalData['favourite_color'] =  $request->input('favourite_color');
        $finalData['favourite_actor'] =  $request->input('favourite_actor');
        $finalData['created_at'] = now();
        $data = \DB::table('users')->insert($finalData);
       
       

      
      
     
        return redirect('login')->withSuccess('Register Successfully!!');
       
    }




        public function login(Request $request){
            return view('login');

        }

public function auth(Request $request){
    
    $email = $request->input('email');
    $password = md5($request->input('password')); 

    // Retrieve the user record based on the email
    $user = \DB::table('users')->where('email', $email)->first();

    if ($user && $user->password === $password) {
      
        $authenticatedUser = new User();
        $authenticatedUser->id = $user->id; 
        $authenticatedUser->name = $user->name; 
       

        // Log in the user
        Auth::login($authenticatedUser);
        
        // Redirect to intended page
        return redirect()->intended('dash');
    } else {
        // Authentication failed, redirect back with error message
        return redirect()->back()->withErrors(['password' => 'Invalid credentials']);
    }
}

           

          


public function dash(){
    return view('dash');

}
public function logout(Request $request){
    Auth::logout();
    return redirect('/login'); 
}
}
