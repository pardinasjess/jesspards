@extends('layouts.master')

@section('title', 'Questionaire')

@section('content')
	 <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
          <p> </p>
     </nav>

     <div class="container-fluid bgapp p-5">
        <form>
            <div class="container w-75 border border-secondary bginapp p-3">
                <fieldset id="group1">
                    <div class="row">
                        <div class="col-6">
                            Question 1
                            <textarea rows="4" cols="50">
                            At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
                            </textarea></br>
                        </div>
                        <div class="col-6 mt-2">
                            a
                            <input type="text"></input><br>
                            b
                            <input type="text"></input><br>
                            c
                            <input type="text"></input>
                        </div>
                    </div>
                    <center><a href="admin" class="btn btn-primary m-3">Submit</a></center>
                </fieldset>
            </div>
        </form>
@endsection