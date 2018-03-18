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

	<title>Applicants Examination</title>
</head>
<body>
	 <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
          <p>GOOD LUCK!</p>
     </nav>

     <div class="container-fluid bgapp p-5">

        <form>
             @for ($i = 0; $i < 3; $i++)
          <div class="container w-50 border border-secondary bginapp p-3">
            <fieldset id="group1">
                <h3>Question 1</h3>
                <div>
                    <input type="radio" name="group1" id="group1" value="A" />
                    <label for="group1">A) Computer Styled Sections </label>
                </div>

                <div>
                    <input type="radio" name="group1" id="group1" value="B" />
                    <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                </div>
            </fieldset>
        </div>@endfor 

        <center><a href="admin" class="btn btn-primary m-3">Submit</a></center>
        </form>

</body>
</html>