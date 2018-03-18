<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script defer src="/js/fontawesome-all.js"></script>

	<title>LogIn Applicant</title>
</head>
<body>
	 <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark">
      
        <a href="/" class="ml-auto"><i class="fas fa-arrow-circle-left"></i></a>

     </nav>

      <div class="container-fluid bgapp p-4">
        <div class="container w-50 border border-secondary p-0 text-center logemp">
            <div class="logtop">Log-in
            </div>

            <form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}

            <center><input type="text" class="form-control w-50 mt-3 {{ $errors->has('EmpId') ? ' has-error' : '' }}" name="EmpId" id="EmpId" placeholder="Username" value="{{ old('EmpId') }}" required autofocus>
            @if ($errors->has('EmpId'))
                <span class="help-block">
                    <strong>{{ $errors->first('EmpId') }}</strong>
                </span>
            @endif
            </center>
            <center><input type="password" class="form-control w-50 mt-3 {{ $errors->has('password') ? ' has-error' : '' }}" id="password" name="password" placeholder="Password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </center>

            <button type="submit" class="btn btn-outline-primary m-3">Login</button>
            <a href="/" class="btn btn-outline-primary m-3">Cancel</a>
            </form>
        </div>
     </div>


  
</body>
</html>