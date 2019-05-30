<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use App\Transaction;

class TransactionInformationController extends Controller
{
    //Create
   public function createTransaction(Request $request) {
      
        $image = $request->input('signature');  // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = str_random(10).'.'.'png';
       
        File::put(public_path('/signature_img/').  '/'.$imageName, base64_decode($image));
      
        $transact = Transaction::firstOrCreate(['signature' => $imageName]);
        $response["success"] = 1;
        $response["message"] = "Successfully";
        return response()->json($response);
    
   }
   
}
