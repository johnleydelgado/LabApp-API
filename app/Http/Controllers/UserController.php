<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Users;
use DB;
class UserController extends Controller
{
   
   public function index(){
    $users  = Users::all();
    $response["users"] = $users;
    $response["success"] = 1;
    return response()->json($response);
   }
   
   //Create
   public function createUsers(Request $request) {
      if (Users::where('u_emailaddress','=', $request->input('u_emailaddress'))->exists()) {
         
          $response["message"] = "Email has been taken";
         return response()->json($response);
         
      } elseif (Users::where('u_username','=', $request->input('u_username'))->exists()) {
         $response["message"] = "Username has been taken";
         return response()->json($response);
         
      } else {

         $users = Users::create($request->all());
         $response["message"] = "Register Successfully";
         return response()->json($response);
      }
   }

   public function updateUsers(Request $request,$id) {
      $users = Users::find($id);
      $users->update($request->all());
      return response()->json($users);
   }
   


    public function deleteUsers($id) {
        $users = Users::find($id);
        $users->delete();
       return response()->json('Removed successfully.');
    }
}
