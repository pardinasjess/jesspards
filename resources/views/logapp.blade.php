@extends('layouts.master')

@section('title', 'Applicant Portal')

@section('content')
<body>
	 <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="ml-auto">    
                    <a href="/"><i class="fas fa-arrow-circle-left"></i></a>
            </div>
     </nav>

      <div class="container-fluid bgapp p-5">
        <div class="container w-50 border border-secondary p-0 text-center logapp">
            <div class="logtop">Log-in
            </div>
            <center><input type="text" class="form-control w-50 mt-3" id="Ecode" placeholder="Enter Code here"></center>
            <a href="app" class="btn btn-outline-primary m-3">Submit</a>
            <a href="/" class="btn btn-outline-primary m-3">Cancel</a>
        </div>
     </div>
@endsection