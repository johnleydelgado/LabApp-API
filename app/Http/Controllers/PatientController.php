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
        if(Patient::where('patient_id','=', $request->input('patient_id'))->exists())
        {
            $response["message"] = "Patient ID is not available";
            return response()->json($response);
        }else{
            Patient::create($request->all());
            $response["message"] = "Register Successfully";
            return response()->json($response);

        }
    }

    public function update(Request $request,$id){
        $patient = Patient::find($id);
        $patient->update($request->all());
        $response["message"] = "Updated Successfully";
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

        $inst_id = $request->input('inst_id');
        if (Patient::where('inst_id','=', $inst_id)) {
            $patient  = Patient::where('inst_id','=',$inst_id)->get();
            $response["patient"] = $patient;
            return response()->json($response);
        }
    }

    public function getPatient2(Request $request){

        $u_id = $request->input('user_id');
        if (Patient::where('user_id','=', $u_id)) {
            $patient  = Patient::where('user_id','=',$u_id)->get();
            $response["patient"] = $patient;
            return response()->json($response);
        }
    }

}
