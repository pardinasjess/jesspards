@extends('layouts.master')

@section('title', 'Applicant')

@section('content')
	 <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
          <p>Applicants Registration</p>
     </nav>

<!--TRIAL-->
    <div class="container-fluid bgapp p-5">
    	<div class="container w-50 border border-secondary bginapp p-3">
				<form class="needs-validation" action="{{Route('app.add')}}" method ="post" enctype="multipart/form-data">
					<input type="hidden" value="{{ Session::token() }}" name="_token">

       		 			<label for="LName">Last Name</label>     		 			
     		 			<input type="text" class="form-control" name="LName" required>    	     		 	
     		 			<label for="FName">First Name</label>   		 			
     		 			<input type="text" class="form-control" name="FName" required>   		 		
     		 			<label for="MName">Middle Name</label>    		 			
     		 			<input type="text" class="form-control" name="MName" required>
     		 			<label for="HAdd">Address</label>    		 			
     		 			<input type="text" class="form-control" name="PermAdd" required> 		 			    		 	
     		 			<label for="EAdd">Email Address</label>    		 			
     		 			<input type="email" class="form-control" name="EAdd" required>   		 	
     		 			<label for="Date1">Birth Date</label>  		 		
     		 			<input type="date" class="form-control" name="DoBirth" required>    	
     		 		 	<label for="Cnum">Contact No.</label>    		 	
     		 			<input type="text" pattern="[0-9\-]{13}" class="form-control" id="ConNum" name="ConNum" required>
                        <center><button type="submit" class="mt-2">Submit</button></center>
     		 			<!--<center><input type="submit" value="Submit" class="sub m-3"></center>-->	 			   	
			</form>
		</div>
     </div>


	 <script>
			$('#ConNum').formatter({
		  'pattern':'@{{9999}}-@{{999}}-@{{9999}}',
		  'persistent': true
		});
	 </script>
@endsection