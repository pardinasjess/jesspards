<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Employee;
use \Input as Input;

class EmployeeController extends Controller
{
    public function show()
    {
		$users = Employee::paginate(5);
		$code = DB::table('code')->get();
        return view('admin', ['users' => $users, 'codes' => $code]);
    }

    public function empshow()
    {
    	$user = Employee::where('EmpId', '1')->first(); //temporary
        return view('emp', ['user' => $user]);
    }

    public function postAddEmp(Request $request) //data type $request
    {
    	$emp = New Employee();
    	$Dhired=date_create($request['Dhired']);
    	$y=$Dhired->format('y');
    	$m=$Dhired->format('m');
    	$d=$Dhired->format('d');
    	$SDhired=Employee::where('DateHired', $Dhired)->count();
    	$emp->EmpId= $y."-".$m.$d."-".$SDhired;
    	$emp->LastName=$request['LName'];
    	$emp->FirstName=$request['FName'];
    	$emp->MiddleName=$request['MName'];
    	$emp->Address=$request['PermAdd'];
    	$emp->Birthdate=$request['DoBirth'];
    	$emp->ContactNum=$request['ConNum'];
    	$emp->MothersName=$request['MotName'];
    	$emp->FathersName=$request['FatName'];
    	$emp->DateHired=$request['Dhired'];
    	$emp->SSSNum=$request['sssnum'];
    	$emp->Tin=$request['tinnum'];
    	$emp->PhilNum=$request['philnum'];
    	$emp->PagibigNum=$request['Pagibignum'];
    	$emp->EmpPos=$request['Pos'];
    	$emp->EmpStatus=$request['EmpStatus'];
    	$emp->EmpPass=bcrypt('0987654321');
    	$emp->save();
		$message='Data Saved!';
		return back()->withInput(['tab'=>'idnumb']);
    	//return redirect()->back()->with(['message'=> $message]);
    }

	public function profileIndex($user_id)
    {
		$user = Employee::find($user_id);
    	return view('profile', ['user'=> $user]);
    }

	public function editProf(Request $request, $user_id)
    {	
		$emp = Employee::find($user_id);
     	$emp->LastName=$request['LName'];
    	$emp->FirstName=$request['FName'];
    	$emp->MiddleName=$request['MName'];
    	$emp->Address=$request['PermAdd'];
    	$emp->Birthdate=$request['DoBirth'];
    	$emp->ContactNum=$request['ConNum'];
    	$emp->MothersName=$request['MotName'];
    	$emp->FathersName=$request['FatName'];
    	$emp->DateHired=$request['Dhired'];
    	$emp->SSSNum=$request['sssnum'];
    	$emp->Tin=$request['tinnum'];
    	$emp->PhilNum=$request['philnum'];
    	$emp->PagibigNum=$request['Pagibignum'];
    	$emp->EmpPos=$request['Pos'];
    	$emp->EmpStatus=$request['EmpStatus'];
       	$emp->update();
    	$message='Data Saved!';
    	return redirect()->back()->with(['message'=> $message]);
	}
	
	public function deleteemp($user_id)
    {
		$user = Employee::find($user_id);
		$user->delete();
    	return back();
	}
	public function gencode()
	{
		$newCode=str_random(5);
		DB::table('code')->insert(['Code'=>$newCode]);
		return back()->withInput(['tab'=>'gencode'])->with(['newCode'=>$newCode]);
		
	}

    /*public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }*/


}
