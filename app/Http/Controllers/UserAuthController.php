<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Users;
class UserAuthController extends Controller
{
   
      public function login(Request $request) {
      $uname
              = $request->input('username');
      $password
              = $request->input('password');
      if(Users::where('u_username','=', $request->input('username'))->exists()){
         
      $user = Users::where('u_username', '=', $uname)->first();
      
      if(Hash::check($password, $user->password)) {
         return "login successfully";
      }else{
          return "Wrong Credentials";
      }
      }else {
         return "Wrong Credentials";
      }
      }

   public function updateUsersPassword(Request $request) {
      $email = $request->input('email');
   
     
      if(Users::where('u_emailaddress','=', $request->input('email'))->exists()){
         
       $user = Users::where('u_emailaddress','=', $email)->first();
      if (!empty($request->input('newpassword'))) {
         $user->password = $request->input('newpassword');
         $user->save();
         return "Password has been change";
      } else {
         return "wrong credentials";
      }
      }else{
         return "email dont exist";
      }


//      $users = Users::find($id);
//      $users->update($request->all());
     // return response()->json($current_password);
   }
}
