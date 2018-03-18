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
	<title>Employee</title>
</head>
<body>

    <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bars"></i> 
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">View Profile</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Submitted Requirements</a>
                              <div class="dropdown-divider"></div>
                              <a href="/"  class="dropdown-item">Log out</a>
                            </div>
                    </li>
                          
                <label></label> &nbsp;&nbsp;
                
            </ul>
        </div>
    </nav>
    

    <div class="container-fluid bgapp p-5">
            <div class="container jumbotron mt-1 p-5">
                <form class="needs-validation" action="{{Route('editemp', ['user_id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                    <div class="row">
                        <div class="col-2 text-center">
                            <img src="/img/pic1.jpg" style="width:150px; height:150px; border-radius:50%">
                            <div class="mt-2"><h6 class="text-center">{{$user->EmpId}}</h6></div>
                            <button class="mt-2">Upload Photo</button>

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
                                <div class="col-8"><input type="Number" class="form-control" name="sssnum" value="{{$user->SSSNum}}" disabled></div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-4"><label for="philnum">Philhealth No.</label></div>
                                <div class="col-8"><input type="Number" class="form-control" name="philnum" value="{{$user->PhilNum}}" disabled></div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-4"><label for="tinnum">TIN</label></div>
                                <div class="col-8"><input type="Number" class="form-control" name="tinnum" value="{{$user->Tin}}" disabled></div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-4"><label for="Pagibignum">Pag-ibig No.</label></div>
                                <div class="col-8"><input type="Number" class="form-control" name="Pagibignum" value="{{$user->PagibigNum}}" disabled></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</body>
</html>