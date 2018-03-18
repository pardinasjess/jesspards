<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.js"></script>

     <title>AAVIOPEEPS</title>

    </head>
    <body>

        <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="btn btn-outline-info nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Log In</a>
                        <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="logapp">Applicant</a>
                            <a class="dropdown-item" href="logemp">Employee</a>
                            <a class="dropdown-item" href="logadmin">Admin</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="demo" class="carousel slide" data-ride="carousel">
            <!--indicators-->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/4.jpg" alt="Los Angeles" >
                    <div class="carousel-caption">
                        <h3>Aims Agri Ventures, Inc. Head Office</h3>
                        <p>Cararayan, Naga City</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/3.jpg" alt="Chicago">
                    <div class="carousel-caption">
                        <h3>Kubota Tractor</h3>
                        <p></p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/5.jpg" alt="New York" >
                    <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <!--AAYUSON ULIT-->
        <div class="container-fluid text-center fsizeDesc"><br>
            <p>The AOPEEPS serves as an online system that helps the human resource management of AIMS Agri Ventures, Inc. in hiring and monitoring the performance of their employees.</p>
        </div>

        <!--AAYUSON ULIT-->
        <div class="container-fluid p-3 footerbg"></div>
    </body>
</html>
