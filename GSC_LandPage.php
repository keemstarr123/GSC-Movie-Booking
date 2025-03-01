<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Welcome to GSC Cinema!</title>
    </head>
    <body class="bg-black">
        <nav class = "navbar navbar-expand p-3 pb-0 justify-content-between" style="height:10vh;background-color:black;width:100%">
            <img class = "d-block me-5" src="./New folder/GSCLogo.webp" alt="GSCLogo" style="height:80%;width:20%;">
            <div class = "collapse navbar-collapse" style="height:100%;">
                <ul class = "navbar-nav h-100" style="font-size:18px;position:relative;bottom:-30%;">
                    <li class = "nav-item" >
                        <a class = "nav-link active fw-bold text-white" href="GSC_LandPage.php">Home</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link text-white" href="BuyTicket.php">Buy ticket</a>
                    </li>
                    <li class = "nav-item dropdown">
                        <a class ="nav-link dropdown-toggle text-white" role="button" href="" id="LandMore" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More..</a>
                        <ul class = "dropdown-menu" aria-labelledby="LandMore">
                            <li><a class = "dropdown-item " href="ViewMovie.php">View Movie</a></li>
                            <li><a class ="dropdown-item" href="Login.php">Login</a></li>
                        </ul>
                    </li>
                </ul>
                <a href = "Login.php" class="nav-item btn btn-light rounded-3 p-2 px-4 py-2 h5 fw-bold text-dark link-underline link-underline-opacity-0" style="position:relative;left:67%;bottom:-10%">Login</a>
            </div>
        </nav>
        <div class="container-fluid d-flex flex-column px-0" style="height:90vh;">
            <div class = "col-12" style="height:85%">
                <div id="SlideCarousel" class = "carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    
                    <div class="carousel-inner">
                        <div class = "carousel-item active" style="max-height:100%;background-size:cover">
                        <img class = "d-block w-100" src="./New folder/StarWars1.png">
                        </div>
                        <div class = "carousel-item" style="max-height:100%;background-size:cover">
                        <img class = "d-block w-100" src="./New folder/Jeanne1.png">
                        </div>
                        <div class = "carousel-item" style="max-height:100%;background-size:cover">
                        <img class = "d-block w-100" src="./New folder/FallGuy1.png" >
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#SlideCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#SlideCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                    <ol class="carousel-indicators">
                        <li data-bs-target="#SlideCarousel" data-bs-slide-to="0" class="active" style="list-style:none;"> </li>
                        <li data-bs-target="#SlideCarousel" data-bs-slide-to="1" style="list-style:none;"> </li>
                        <li data-bs-target="#SlideCarousel" data-bs-slide-to="2" style="list-style:none;"></li>
                    </ol>
                </div>         
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center" style="height:15%">
            <div class="">
                <a href="BuyTicket.php" class="btn btn-warning rounded-pill px-4 py-2 fw-bolder">Buy ticket</a>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        

    </body>
</html>