@extends('layouts.master')

@section('title', 'Update Profile')

@section('content')
	 <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
          <p>Update Profle</p>
     </nav>

<!--TRIAL-->
    <div class="container-fluid bgapp p-5">
    	<div class="container w-50 border border-secondary bginapp p-3">
     		<form>
       		 			<label for="LName">Last Name</label>     		 			
     		 			<input type="text" class="form-control" id="LName" placeholder="Last Name">    	     		 	
     		 			<label for="FName">First Name</label>   		 			
     		 			<input type="text" class="form-control" id="FName" placeholder="First Name">   		 		
     		 			<label for="MName">Middle Name</label>    		 			
     		 			<input type="text" class="form-control" id="MName" placeholder="Middle Name">
     		 			<label for="HAdd">Address</label>    		 			
     		 			<input type="text" class="form-control" id="HAdd" placeholder="Permanent Address"> 		 			    		 	
     		 			<label for="EAdd">Email Address</label>    		 			
     		 			<input type="email" class="form-control" id="EAdd" placeholder="Email Address">   		 	
     		 			<label for="Date1">Birth Date</label>  		 		
     		 			<input type="date" class="form-control" id="Date">    	
     		 		 	<label for="Cnum">Contact No.</label>    		 	
     		 			<input type="number" class="form-control" id="Cnum" placeholder="Contact Number">
                        <label for="dhired">Date Hired</label>               
                        <input type="date" class="form-control" id="dhired" placeholder="Date Hired">
                        <label for="SSSnum">SSS No.</label>               
                        <input type="number" class="form-control" id="SSSnum" placeholder="SSS number">
                        <label for="Philnum">Philhealth No.</label>               
                        <input type="number" class="form-control" id="Philnum" placeholder="Philhealth Number">
                        <label for="TINnum">TIN</label>               
                        <input type="number" class="form-control" id="TINnum" placeholder="TIN">
                        <center><a href="admin" class="btn btn-primary m-3">Submit</a></center>
     		 			<!--<center><input type="submit" value="Submit" class="sub m-3"></center>-->	 			   	
			</form>
		</div>
     </div>
@endsection