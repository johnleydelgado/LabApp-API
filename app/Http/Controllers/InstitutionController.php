<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Institution;
class InstitutionController extends Controller
{
    //

    public function index(){
        $institution  = Institution::all();
        $response["institution"] = $institution;

        return response()->json($response);
    }

    public function store(Request $request){
        Institution::create($request->all());
        $response["message"] = "Register Successfully";
        return response()->json($response);
    }

    public function update(Request $request,$id){
        $institution = Institution::find($id);
        $institution->update($request->all());
        $response["message"] = "Update Successfully";
        return response()->json($response);
    }

    public function destroy($id)
    {

        $institution = Institution::find($id);
        $institution->delete();
        $response["message"] = "Successfully deleted.";
        return response()->json($response);
    }
}
