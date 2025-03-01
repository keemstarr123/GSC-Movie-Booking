<html>
    
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Welcome to GSC Cinema!</title>
        <?php
        $con = mysqli_connect("localhost","root","","gsc_database","3308");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $time = $_POST["Time"];
        $date = $_POST["Date"];
        $movie = intval($_POST["Movie"]);
        $hall = intval($_POST["Hall"]);

        $sql = "INSERT INTO MovieScreenings(ShowtimeDate, Showtime, Movie_ID, Hall_No) VALUES ('$date', '$time', $movie, $hall);";
        $result = mysqli_query($con,$sql);
        ?>

    
    
    </head>
    <body class="bg-black overflow-hidden" style="height:100vh">
        <nav class = "navbar navbar-expand p-3 pb-0 justify-content-between" style="height:10%;background-color:black;width:100%">
            <img class = "d-block me-5" src="./New folder/GSCLogo.webp" alt="GSCLogo" style="height:80%;width:20%;">
            <div class = "collapse navbar-collapse" style="height:100%;">
                <ul class = "navbar-nav h-100" style="font-size:18px;position:relative;bottom:-30%;">
                    <li class = "nav-item" >
                        <a class = "nav-link text-white" href="AdminMenu.php">Menu</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link fw-bold active text-white" href="AddScreening.php">Add New Screening</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link text-white" href="AssessEarnings.php">Assess Earnings</a>
                    </li>
                </ul>
                <a  class="nav-item btn btn-danger rounded-3 p-2 px-4 py-2 h5 fw-bold text-dark link-underline link-underline-opacity-0" href="GSC_LandPage.php" style="position:relative;left:53%;bottom:-10%">Log out</a>
            </div>
        </nav>
        <div class="container-fluid d-flex p-5 justify-content-center align-items-center" style="height:90%;padding:3% 10%">
            <div class = "d-flex flex-column align-items-center">
                <img src="./New folder/success.svg">
                <h4 class="text-white mt-3">Added sucessful!</h4>
                <a class="btn btn-warning rounded-pill px-4 py-3 mt-3" href="AdminMenu.php">Back to Menu</a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>