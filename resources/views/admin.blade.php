@extends('layouts.master')

@section('title', 'Admin')

@section('content')

	<nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <p>Human Resource Record</p>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <label>(Admin's Name)</label> &nbsp;&nbsp;
                <a href="/" class="btn btn-outline-primary">Log out</a>
            </ul>
        </div>
    </nav>

    <div class="container-fluid bgapp p-5"><!--TAB HEADS-->
        <div class="container w-60 border border-secondary bginemp p-2">
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="perprof-tab" data-toggle="tab" href="#perprof" role="tab" aria-controls="perprof" aria-selected="true">List of Employees</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="idnum-tab" data-toggle="tab" href="#idnumb" role="tab" aria-controls="idnumb" aria-selected="false">Manage Employee Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="gencode-tab" data-toggle="tab" href="#gencode" role="tab" aria-controls="gencode" aria-selected="false">Examination Codes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="quest-tab"  href="quest" role="tab" aria-controls="quest" aria-selected="false">Edit Questionnaire</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent"> <!--LIST OF EMPLOYEES-->
                <div class="tab-pane fade show active" id="perprof" role="tabpanel" aria-labelledby="perprof-tab">

                    <table class="table mt-4">
                        <thead class="thead-inverse">
                            <tr>
                            <th>Employee ID No.</th>
                            <th>Full Name</th>
                            <th class="">Employment Status</th>
                            <td class="" colspan="4"><a class="float-right mr-4" href="javascript:window.location.reload();"><i class="fas fa-sync mr-1"></i> Refresh</a></td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                          
                            <td>{{$user->EmpId}}</td>
                            <td>{{$user->FirstName}}&nbsp;{{$user->MiddleName}}&nbsp;{{$user->LastName}}</a></td>
                            <td class="">{{$user->EmpStatus}}</td>
                            <td><a href= "{{Route('profile', ['user_id'=>$user->id])}}"  style="text-decoration:none;" target="_blank" ><i class="fas fa-search"></i>&nbsp;Profile</a></td>
                                                        
                            
                            <td><a href="#" style="text-decoration:none;"><i class="fas fa-search"></i>&nbsp;Attachments</a></td>    
                            <td><a href="#" style="text-decoration:none;"><i class="far fa-clipboard"></i>&nbsp;Evaluate</a></td>
                            <td><a class="confirmation" href="{{Route('delete', ['user_id'=>$user->id])}}" style="text-decoration:none;"><i class="fas fa-user-times"></i>&nbsp;Remove</a></td>
                            </tr>
                        @endforeach
                       </tbody>
                    </table>  
                      <div class="d-flex justify-content-center align-items-end">{{$users->links()}}</div>
                 </div>


                <div class="tab-pane fade" id="idnumb" role="tabpanel" aria-labelledby="idnumb-tab"><!--MANAGE PROFILE-->

                       <form class="needs-validation" action="{{Route('emp.add')}}" method ="post" enctype="multipart/form-data">
                        <input type="hidden" value="{{ Session::token() }}" name="_token">

                           <div class="row p-3">
                               <div class="col-6">
                                   <div class="row">
                                       <div class="col-3"><label for="LName">Last Name</label></div>
                                       <div class="col-9"><input type="text" class="form-control" name="LName" required>
                                       </div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="FName">First Name</label></div>
                                       <div class="col-9"><input type="text" class="form-control" name="FName" required>
                                       </div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="MName">Middle Name</label></div>
                                       <div class="col-9"><input type="text" class="form-control" name="MName" required></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="PermAdd">Address</label></div>
                                       <div class="col-9"><input type="text" class="form-control" name="PermAdd" required></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="ConNum">Contact No.</label></div>
                                       <div class="col-9"><input type="text" pattern="[0-9\-]{13}" class="form-control" id="ConNum" name="ConNum" required></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="DoBirth">Date of Birth</label></div>
                                       <div class="col-9"><input type="Date" class="form-control" name="DoBirth" required></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="Pos">Position</label></div>
                                       <div class="col-9"><input type="text" class="form-control" name="Pos" required></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3">
                                           <label for="EmpStatus" style="font-size: 15px;">Employee Status</label>
                                       </div>

                                       <div class="col-9 input-group mb-3">
                                           <select class="custom-select" name="EmpStatus" required>
                                               <option value=" "> </option>
                                               <option value="Probationary">Probationary</option>
                                               <option value="Contractual">Contractual</option>
                                               <option value="Regular">Regular</option>
                                           </select>

                                       </div>
                                   </div>
                               </div>

                               <div class="col-6">
                                   <div class="row mt-2">
                                       <div class="col-3"><label for="Dhired">Date Hired</label></div>
                                       <div class="col-9"><input type="date" class="form-control" name="Dhired" required></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="FatName">Fathers Name</label></div>
                                       <div class="col-9"><input type="text" class="form-control" name="FatName" required></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="MotName">Mothers Name</label></div>
                                       <div class="col-9"><input type="text" class="form-control" name="MotName" required></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="sssnum">SSS No.</label></div>
                                       <div class="col-9"><input  type="text" pattern="[0-9\-]{12}" class="form-control"  id="sss" name="sssnum"></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="philnum">Philhealth No.</label></div>
                                       <div class="col-9"><input type="text" pattern="[0-9\-]{14}" class="form-control" id="phil" name="philnum"></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="tinnum">TIN</label></div>
                                       <div class="col-9"><input type="text" pattern="[0-9\-]{15}" class="form-control" id="tinum" name="tinnum"></div>
                                   </div>

                                   <div class="row mt-2">
                                       <div class="col-3"><label for="Pagibignum">Pag-ibig No.</label></div>
                                       <div class="col-9"><input type="text" pattern="[0-9\-]{14}" class="form-control" id="pagibig" name="Pagibignum"></div>
                                   </div>

                                   <button type="submit" class="mt-2 ml-5 float-right">Save</button>
                               </div>
                           </div>
                       </form>

                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function() {'use strict';
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

                <div class="tab-pane fade" id="gencode" role="tabpanel" aria-labelledby="gencode-tab"><!--NEXT TAB GEN CODE-->
                    <div class="row p-3">
                        <div class="col-6 d-flex text-center justify-content-center align-items-center">
                            <div><a href="{{url('gencode')}}" class="btn btn-outline-success">Generate Code</a><br><br>
                                <input type="text" class="text-center" value="@if (session()->has('newCode')) {{session('newCode')}} @endif" disabled>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card-header">List of Codes</div>
                            <div class="card" style="width: 100%; height:300px; overflow-y:scroll; display:block;">
                                <ul class="list-group list-group-flush">
                                    @foreach($codes as $code)
                                        <li class="list-group-item">{{$code->Code}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $('.confirmation').on('click', function () {
                return confirm('Are you sure?');
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#myTab a[href="#{{old('tab')}}"]').tab('show')
            });
        </script>

        <script>
            $('#sss').formatter({
                'pattern':'@{{99}}-@{{9999999}}-@{{9}}',
                'persistent': false
            });

            $('#phil').formatter({
                'pattern': '@{{99}}-@{{999999999}}-@{{9}}',
                'persistent': false
            });

            $('#tinum').formatter({
                'pattern': '@{{999}}-@{{999}}-@{{999}}-@{{999}}',
                'persistent': false
            });

            $('#pagibig').formatter({
                'pattern': '@{{9999}}-@{{9999}}-@{{9999}}',
                'persistent': false
            });

            $('#ConNum').formatter({
                'pattern':'@{{9999}}-@{{999}}-@{{9999}}',
                'persistent': true
            });
        </script>
@endsection