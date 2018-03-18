<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
		<script src="/js/jquery-3.3.1.min.js"></script>
		<script src="/js/jquery.formatter.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.js"></script>

	<title>Applicant</title>
</head>
<body>
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
</body>
</html>