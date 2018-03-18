<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class ApplicantController extends Controller
{
    public function appReg(Request $request) //data type $request
    {
    	$app = New Applicant();
    	$app->LastName=$request['LName'];
    	$app->FirstName=$request['FName'];
    	$app->MiddleName=$request['MName'];
        $app->Address=$request['PermAdd'];
        $app->EAddress=$request['EAdd'];
    	$app->Birthdate=$request['DoBirth'];
    	$app->ContactNum=$request['ConNum'];
    	$app->save();
	    return redirect('exam');
    	//return redirect()->back()->with(['message'=> $message]);
    }
}
