<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Users;
use Illuminate\Http\Request;

class PatientController extends Controller
{


    public function index(){
        $patient  = Patient::all();
        $response["patient"] = $patient;

        return response()->json($response);
    }

    public function store(Request $request){
        Patient::create($request->all());
        $response["message"] = "Register Successfully";
        return response()->json($response);
    }

    public function update(Request $request,$id){
        $patient = Patient::find($id);
        $patient->update($request->all());
        $response["message"] = "Register Successfully";
        return response()->json($response);
    }

    public function destroy($id)
    {

        $patient = Patient::find($id);
        $patient->delete();
        $response["message"] = "Successfully deleted.";
        return response()->json($response);
    }

    //get the Users id to show the institution name
    public function show($id) {
        $Users = Users::where('user_id','=',$id)->get();
        foreach($Users as $user){
            $response["institution_name"] = $user->institution->i_name;
        }
        return response()->json($response);
    }

    public function getPatient(Request $request){
        $id = $request->input('user_id');

        if (Patient::where('user_id','=', $id)) {

            $patient  = Patient::where('user_id','=',$id)->get();
            $response["patient"] = $patient;
            return response()->json($response);
        }
    }

}
