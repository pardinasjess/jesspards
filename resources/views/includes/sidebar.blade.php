
        <div class="container w-100 border border-secondary p-0 text-center">
            <div class="logtop">Employee/Admin<br>Login</div>

            <form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}

            <center><input type="text" class="form-control w-75 mt-3 {{ $errors->has('EmpId') ? ' has-error' : '' }}" name="EmpId" id="EmpId" placeholder="Employee ID" value="{{ old('EmpId') }}" required autofocus>
            @if ($errors->has('EmpId'))
                <span class="help-block">
                    <strong>{{ $errors->first('EmpId') }}</strong>
                </span>
            @endif
            </center>
            <center><input type="password" class="form-control w-75 mt-3 {{ $errors->has('password') ? ' has-error' : '' }}" id="password" name="password" placeholder="Password" required>
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

        
        <div class="container w-100 border border-secondary mt-5 p-0 text-center">
            <div class="logtop">Applicant Portal
            </div>

            <form action="{{ url('app') }}" method="post">
            {{ csrf_field() }}

            <center><input type="text" class="form-control w-75 mt-3 {{ $errors->has('passcode') ? ' has-error' : '' }}" name="passcode" id="passcode" placeholder="Passcode" value="{{ old('passcode') }}" required autofocus>
            @if ($errors->has('passcode'))
                <span class="help-block">
                    <strong>{{ $errors->first('passcode') }}</strong>
                </span>
            @endif
            </center>

            <button type="submit" class="btn btn-outline-primary m-3">Enter</button>
            </form>
        </div>