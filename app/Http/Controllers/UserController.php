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

   public function getUserWithin(Request $request){

    //$inst_id = $request->input('inst_id');

    // if (Users::where('inst_id','=', $inst_id)) { where('inst_id','=',$inst_id)->

        $users  = Users::where('u_role','=','2')->get();
        $response["users"] = $users;
        // foreach($users as $user){
        //     $response["institution_name"] = $user->institution->i_name;
        // }

        return response()->json($response);
    // }

   }

   //Create
   public function store(Request $request) {
      if (Users::where('u_emailaddress','=', $request->input('u_emailaddress'))->exists()) {

         $response["message"] = "Email has been taken";
         $response["success"] = 0;
         return response()->json($response);

      } elseif (Users::where('u_username','=', $request->input('u_username'))->exists()) {
         $response["success"] = 0;
         $response["message"] = "Username has been taken";
         return response()->json($response);

      } else {

         $users = Users::create($request->all());
         $response["success"] = 1;
         $response["message"] = "Register Successfully";
         return response()->json($response);
      }
   }

   public function update(Request $request,$id) {
      $users = Users::find($id);
      $users->update($request->all());
      $response["message"] = "Updated Successfully";
      return response()->json($response);
   }



    public function destroy($id) {
        $users = Users::find($id);
        $users->delete();
        $response["message"] = "Successfully deleted.";
       return response()->json($response);
    }
}
