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

        $movieScreenings = array();
        $movieName = array();
        $sql = "SELECT * FROM Movies;";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $movieID = $row['Movie_ID'];
            $movieName[] = $row['MovieName'];
            $movieScreenings[$movieID] = array();
            $movieScreeningsSQL = "SELECT ShowtimeDate FROM MovieScreenings WHERE Movie_ID = $movieID GROUP BY ShowtimeDate ORDER BY ShowtimeDate;";
            $movieScreeningsresult = mysqli_query($con,$movieScreeningsSQL);
            while($dateRow = mysqli_fetch_assoc($movieScreeningsresult)) {
                $date = $dateRow["ShowtimeDate"];
                $movieScreenings[$movieID][$date] = array();
                $ScreeningsSQL = "SELECT * FROM MovieScreenings WHERE Movie_ID = $movieID AND ShowtimeDate = '$date' ORDER BY Showtime;";
                $Screeningsresult = mysqli_query($con,$ScreeningsSQL);
                while($screening = mysqli_fetch_object($Screeningsresult)) {
                    
                    $movieScreenings[$movieID][$date][] = $screening;
                };  
            };
        };


        
    ?>
    <script>
        function ScreeningsSelected(screening) {
            var input = document.querySelector('[name="screeningID"]');
            input.value =  screening.dataset.screeningid;
            input.parentElement.submit();
            
        }
    </script>
    </head>
    <body class="bg-black" >
        <nav class = "navbar navbar-expand p-3 pb-0 justify-content-between" style="height:10vh;background-color:black;width:100%">
            <img class = "d-block me-5" src="./New folder/GSCLogo.webp" alt="GSCLogo" style="height:80%;width:20%;">
            <div class = "collapse navbar-collapse" style="height:100%;">
                <ul class = "navbar-nav h-100" style="font-size:18px;position:relative;bottom:-30%;">
                    <li class = "nav-item" >
                        <a class = "nav-link  text-white" href="GSC_LandPage.php">Home</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link fw-bold active text-white" href="BuyTicket.php">Buy ticket</a>
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
        <div class="container-fluid d-flex flex-column px-0 mt-5" style="height:80vh;">
            <h3 class="text-white fw-bold px-4 mb-4">Showtimes: </h3>
            <form action='TicketSeat.php' class = 'd-none' method='POST'>
                <input type='hidden' name='screeningID'>
            </form>
            <div class="accordion px-4" id="ShowTimeAccordion">
                <?php
                    forEach( $movieScreenings as $movieID =>$ShowTimeDate) {
                        $name = $movieName[$movieID-1];
                        echo 
                        "
                        <div class='accordion-item' id = '$movieID'>
                            <h2 class='accordion-header' id='panelsStayOpen-headingOne'>
                                <button class='accordion-button bg-warning fw-bold' type='button' data-bs-toggle='collapse' data-bs-target='#panelsStayOpen-collapse$movieID' aria-expanded='true' aria-controls='panelsStayOpen-collapseOne'>
                                    $name
                                </button>
                            </h2>
                            <div id='panelsStayOpen-collapse$movieID' class='accordion-collapse collapse ";
                        echo $movieID == 1 ? "show" : "";
                        echo 
                        "' aria-labelledby='panelsStayOpen-headingOne'>
                                <div class='accordion-body row p-3 overflow-auto' style='max-height:30vh;max-width:100%;'>
                        ";
                        forEach($ShowTimeDate as $date => $screenings) {
                            echo 
                            "
                            <h5>$date</h5>
                            ";
                            forEach($screenings as $screening) {
                                echo 
                                "
                                <div class='col-auto my-3'>
                                    
                                    <button class='btn btn-dark rounded-3 py-2 px-4' data-screeningid = '$screening->Screenings_ID' onclick = 'ScreeningsSelected(this)'>$screening->Showtime</button>
                                </div>
                                ";
                            };
                        }; 
                        echo 
                        "    
                                </div>
                            </div>
                        </div>
                        ";
                    };
                ?>
            </div>
            
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        

    </body>
</html>