@extends('layouts.master')

@section('title', 'Admin Login')

@section('content')
         <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark text-right">
            <div class="ml-auto">    
                    <a href="/"><i class="fas fa-arrow-circle-left"></i></a>
            </div>
     </nav>

      <div class="container-fluid bgapp p-4">
        <div class="container w-50 border border-secondary p-0 text-center logemp">
            <div class="logtop">Log-in
            </div>

            <center><input type="text" class="form-control w-50 mt-3" name="UName" id="UName" placeholder="Username"></center>

            <center><input type="text" class="form-control w-50 mt-3" id="Pwd" placeholder="Password"></center>


            <a href="admin" class="btn btn-outline-primary m-3">Login</a>
            <a href="/" class="btn btn-outline-primary m-3">Cancel</a>
            
        </div>
     </div>
@endsection