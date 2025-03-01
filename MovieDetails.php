<?php
    $movie = $_POST['MovieID'];
    $con = mysqli_connect("localhost","root","","gsc_database","3308");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }
    $sql = "SELECT * FROM Movies where movie_id = $movie;";
    $result = mysqli_query($con, $sql);
    $obj = mysqli_fetch_object( $result );
    $title = $obj ->MovieName;
    $director = $obj ->MovieDirector;
    $genre = $obj ->MovieGenre;
    $description = $obj ->MovieDescription;
    $duration = $obj ->MovieDuration;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title><?php echo $title;?></title>
        <script>
            function selectMovie(movie_id) {
                var input = document.querySelector('[name="MovieID"]');
                var submit = document.querySelector('#submitbutton');
                input.value = movie_id;
                submit.click();
            }
        </script>
    </head>
    <body class="bg-black">
        <nav class = "navbar navbar-expand p-3 pb-0 justify-content-between" style="height:10vh;background-color:black;width:100%">
            <img class = "d-block me-5" src="./New folder/GSCLogo.webp" alt="GSCLogo" style="height:80%;width:20%;">
            <div class = "collapse navbar-collapse" style="height:100%;">
                <ul class = "navbar-nav h-100" style="font-size:18px;position:relative;bottom:-30%;">
                    <li class = "nav-item" >
                        <a class = "nav-link text-white" href="GSC_LandPage.php">Home</a>
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
        <form id = "form" method="POST" action="MovieDetails.php">
            <input type="hidden" name = "MovieID" value = "">
            <input type="submit" id="submitbutton" class="d-none">
            <div class="container-fluid row px-0 mt-5" style="height:auto;">
                <?php 
                echo 
                    "
                    <div class='col-4 py-4 d-flex flex-column align-items-center justify-content-center'>
                        <div><a id='$title' onclick='selectMovie(this.id)'><img class = 'ms-3 rounded-4' src= './New folder/Poster$movie.jpg' style='cursor: pointer;height:70vh;width:25vw;object-fit:contain;box-shadow:0 0px 50px 3px #D8D9DA;'></a></div>
                    </div>
                    <div class = 'col-8 row h-100'>
                        <div class ='col-12 my-3 text-warning fw-bold display-2'>$title</div>
                        <div class= 'col-auto text-white '>English</div>
                        <div class= 'col-auto text-white '>$genre</div>
                        <div class= 'col-auto text-white '>$duration minutes</div>
                        <div class= 'col-12 text-warning h5 mt-4 mb-5'>Director:<span class = 'text-white fw-lighter ms-2'> $director</span></div>
                        <div class= 'col-12 text-warning h5'>Synopsis:</div>
                        <div class='col-12 fw-lighter text-white h5'>$description</div>
                        <div class= 'col-auto mt-4'><a href='BuyTicket.php' class ='btn btn-light rounded-pill px-4 py-3 fw-bolder'>Buy Now</a></div>
                    </div>
                    
                    ";     
                
                ?>
                
            
            </div>
        </form>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        

    </body>
</html>