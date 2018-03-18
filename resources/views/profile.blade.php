<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/jquery.formatter.js"></script>
        <script src="/js/jquery.formatter.min.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.js"></script>

	<title>Employee profile</title>
</head>
<body>
    <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <p>Employee Profile</p>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                              
            </ul>
        </div>
        <button type="button" 
        onclick="window.open('', '_self', ''); window.close();">X</button>
    </nav>

    <div class="container-fluid bgapp p-5">
    <div class="container jumbotron mt-1 p-5">
            <form class="needs-validation" action="{{Route('editemp', ['user_id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                <input type="hidden" value="{{ Session::token() }}" name="_token">
        <div class="row">      
            <div class="col-2 text-center">
                <img src="/img/{{$user->avatar}}" style="width:150px; height:150px; border-radius: 50%">
                <div class="mt-2"><h6 class="text-center">{{$user->EmpId}}</h6></div>
      {{--    TODO: BE CONTINUED...
             <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label style="font-size:10px;">Update Profile Image</label>
                    <input type="file" name="avatar" style="font-size:10px;">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <br><br>
                    <input type="submit" class="btn btn-sm btn-primary">
                </form>--}}


            </div>
            
           <div class="col-5"> 
                    <div class="row">
                        <div class="col-4"><label for="LName">Last Name</label></div>
                        <div class="col-8"><input type="text" class="form-control" name="LName" value="{{$user->LastName}}" required disabled></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4"><label for="FName">First Name</label></div>
                        <div class="col-8"><input type="text" class="form-control" name="FName" value="{{$user->FirstName}}" required disabled></div>
                    </div>
                    <div class="row mt-2">
                            <div class="col-4"><label for="MName">Middle Name</label></div>
                            <div class="col-8"><input type="text" class="form-control" name="MName" value="{{$user->MiddleName}}" required disabled></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4"><label for="PermAdd">Address</label></div>
                        <div class="col-8"><input type="text" class="form-control" name="PermAdd" value="{{$user->Address}}" required disabled></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4"><label for="ConNum">Contact #</label></div>
                        <div class="col-8"><input type="text" class="form-control" name="ConNum" value="{{$user->ContactNum}}" required disabled></div>
                    </div>
                    <div class="row mt-2">
                            <div class="col-4"><label for="DoBirth">Birthdate</label></div>
                            <div class="col-8"><input type="Date" class="form-control" name="DoBirth" value="{{$user->Birthdate}}" required disabled></div>
                    </div>
                    <div class="row mt-2">
                            <div class="col-4"><label for="Pos">Position</label></div>
                            <div class="col-8"><input type="text" class="form-control" name="Pos" value="{{$user->EmpPos}}" required disabled></div>
                    </div>

                    <div class="row mt-2">
                            <div class="col-4">
                                <label for="EmpStatus" style="font-size: 15px;">Employee Status</label>
                            </div>

                        <div class="col-8 input-group mb-3">
                            <select class="custom-select" name="EmpStatus" disabled>
                            <option value="{{$user->EmpStatus}}"selected hidden>{{$user->EmpStatus}}</option>
                            <option value="Probationary">Probationary</option>
                            <option value="Contractual">Contractual</option>
                            <option value="Regular">Regular</option>
                            </select>
                            <div class="input-group-append">
                            
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-5">
                <div class="row">
                    <div class="col-4"><label for="Dhired">Date Hired</label></div>
                    <div class="col-8"><input type="date" class="form-control" name="Dhired" value="{{$user->DateHired}}" required disabled></div>
                </div>
                
                <div class="row mt-2">
                    <div class="col-4"><label for="FatName">Fathers Name</label></div>
                    <div class="col-8"><input type="text" class="form-control" name="FatName" value="{{$user->FathersName}}" required disabled></div>
                </div>

                <div class="row mt-2">
                    <div class="col-4"><label for="MotName">Mothers Name</label></div>
                    <div class="col-8"><input type="text" class="form-control" name="MotName" value="{{$user->MothersName}}" required disabled></div>
                </div>
                
                <div class="row mt-2">
                    <div class="col-4"><label for="sssnum">SSS No.</label></div>
                    <div class="col-8"><input type="text" pattern="[0-9\-]{12}" class="form-control" id="sss" name="sssnum" value="{{$user->SSSNum}}" disabled></div>
                </div>
                
                <div class="row mt-2">
                    <div class="col-4"><label for="philnum">Philhealth No.</label></div>
                    <div class="col-8"><input type="text" pattern="[0-9\-]{14}" class="form-control" id="phil" name="philnum" value="{{$user->PhilNum}}" disabled></div>
                </div>
                
                <div class="row mt-2">
                    <div class="col-4"><label for="tinnum">TIN</label></div>
                    <div class="col-8"><input type="text" pattern="[0-9\-]{15}" class="form-control" id="tinum" name="tinnum" value="{{$user->Tin}}" disabled></div>
                </div>
                
                <div class="row mt-2">
                    <div class="col-4"><label for="Pagibignum">Pag-ibig No.</label></div>
                    <div class="col-8"><input type="text" pattern="[0-9\-]{14}" class="form-control" id="pagibig" name="Pagibignum" value="{{$user->PagibigNum}}" disabled></div>
                </div>
                <button type="submit" class="mt-2 float-right" id="savebtn" disabled>Save</button>
                <button id="editbtn" class="mt-2 float-right mr-2" onclick="event.preventDefault(); $('input').removeAttr('disabled'); $('select').removeAttr('disabled'); $('#cancelbtn').css('display', 'inline-block'); $('#editbtn').css('display', 'none');$('#savebtn').removeAttr('disabled');">Edit</button>
                <button style="display:none;" id="cancelbtn" class="mt-2 float-right mr-2" onclick="event.preventDefault(); location.reload();">Cancel</button>
            </div>
        </div>
            </form>
            
    <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
             var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                 if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
             }
                    form.classList.add('was-validated');
                    }, false);
                    });
                    }, false);
                    })();
            </script>
    </div>
    </div>

    <script>
            $('#sss').formatter({
          'pattern': '@{{99}}-@{{9999999}}-@{{9}}',
          'persistent': true
        });
    
         $('#phil').formatter({
          'pattern': '@{{99}}-@{{999999999}}-@{{9}}',
          'persistent': true
        });
    
          $('#tinum').formatter({
          'pattern': '@{{999}}-@{{999}}-@{{999}}-@{{999}}',
          'persistent': true
        });
    
          $('#pagibig').formatter({
          'pattern': '@{{9999}}-@{{9999}}-@{{9999}}',
          'persistent': true
        });
        </script>
<script>
    

</body>
</html>