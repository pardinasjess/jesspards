<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/bootstrap.css">

     <title>AAVIOPEEPS</title>

    </head>
    <body>
        <div class="wrap shrink">
            <nav class="navtext p-3 navbar navbar-expand-lg navbar-dark bg-dark">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-outline-light" disabled>
                            Login
                            </button>
                            <a href="#sidebar" class="btn btn-outline-light menu-link"><i class="fas fa-lg fa-sign-in-alt"></i></a>
                            
                        </div>
                    </li>
                </ul>
            </nav>

            <div id="sidebar" class="jumbotron">
                @include('includes.sidebar')
            </div>

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
        </div>
        
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script defer src="/js/fontawesome-all.js"></script>
        <script src="/js/bigSlide.js"></script>

        <script>
            var q = $(document).ready(function() {
                $('.menu-link').bigSlide({
                    menu: ('#sidebar'),
                    menuWidth: '30vw',
                    push:('wrap'),
                    side: 'right',
                    saveState: true,
                });
            });
        </script>
    </body>
</html>
