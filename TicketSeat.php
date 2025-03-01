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

        $movieScreening = $_POST['screeningID'];
        echo "<script>console.log('$movieScreening')</script>";
        $seats = array();
        $seatcolour = array();
        $sql1 = "SELECT *, 
                        CASE 
                            WHEN Seats.Seat_ID IN (
                                SELECT s.Seat_ID 
                                FROM Seats s 
                                JOIN moviescreenings ms ON s.Hall_No = ms.Hall_No 
                                WHERE Seat_ID NOT IN (
                                    SELECT Seat_ID 
                                    FROM seat_ticketsales st 
                                    JOIN ticketsales ts ON st.Ticket_ID = ts.Ticket_ID 
                                    WHERE ts.Screenings_ID = $movieScreening
                                ) 
                                AND ms.Screenings_ID = $movieScreening
                            ) THEN 'No' 
                            ELSE 'Yes' 
                        END AS Occupied,
                        IF(Seats.SeatClass = 'Premium', 'warning', 
                        IF(Seats.SeatClass = 'Deluxe', 'primary', 
                            IF(Seats.SeatClass = 'Economy', 'success', NULL)
                        )
                        ) AS Colour
                FROM MovieScreenings 
                JOIN Movies ON MovieScreenings.Movie_ID = Movies.Movie_ID 
                JOIN Hall ON MovieScreenings.Hall_No = Hall.Hall_No 
                JOIN Seats ON Hall.Hall_No = Seats.Hall_No 
                WHERE Screenings_ID = $movieScreening;";
        
        $result1 = mysqli_query($con, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $movie = $row1['MovieName'];
        $hall = $row1['Hall_No'];
        $NOC = $row1['TotalColumn'];
        $seats[$row1['Seat_ID']] = $row1['Occupied'];
        $seatcolour[$row1['Seat_ID']] = $row1['Colour'];
        while ($row = mysqli_fetch_assoc($result1)) {
            $seats[$row['Seat_ID']] = $row['Occupied'];
            $seatcolour[$row['Seat_ID']] = $row['Colour'];
            $color= $row['Colour'];
            echo "<script>console.log(`$color`)</script>";
        }
         
    ?>

    <script>
        function buttonClick(button, checkbox) {
            if (!button.classList.contains('active')) {
                button.classList.add('btn-light');
                checkbox.checked = 'checked';
                button.classList.add('active');
            } else {
                button.classList.remove('btn-light');
                checkbox.checked = '';
                button.classList.remove('active');
            }

            if (document.querySelectorAll('[type="checkbox"]:checked').length >0) {
                document.querySelector('.submitbutton').classList.remove('d-none');
            } else {
                document.querySelector('.submitbutton').classList.add('d-none');
            }
 

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
                        <a class = "nav-link fw-bold  active  text-white" href="BuyTicket.php">Buy ticket</a>
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
        <form action="Payment.php" method="POST">
            <input type="hidden" name = "screeningID" value = "<?php echo $movieScreening?>">
            <div class="container-fluid d-flex flex-column px-0 mt-5">
                <h3 class="text-white fw-bold px-4 mb-4">Seats: </h3>
                <div class="d-flex flex-column p-5 h-100" id="">
                    <?php
                        for ($row = 'A' ; $row <= 'E'; $row++) {
                            echo "
                            <div class = 'row row-col-$NOC my-3'>
                                <div class = 'col-1 fw-bold text-white text-center'>$row</div>
                            ";
                            for ($col = 1;$col<=$NOC;$col++) {
                                $formattedcol = str_pad($col, 2, '0', STR_PAD_LEFT);
                                $id = $hall . $row . $formattedcol;
                                echo "<button type='button' id = '$id' class = ' col btn ";
                                echo " fw-bold mx-2 ";
                                echo ($seats[$id] == 'Yes') ? 'btn-dark disabled ' : "btn-$seatcolour[$id] "; 
                                echo "py-2' onclick = 'buttonClick(this, this.nextElementSibling);'>$col</button>";
                                echo "<input type='checkbox' name='seats[]' id='$id' value = '$id' class = 'd-none col-0'>";
                            };
                            echo "
                            </div>
                            ";
                        };
                    ?>
                    <div class = "mt-4 row justify-content-end">
                        <div class = "col-auto"><button type="submit" style="position:absolute;left:47.5vw;" class ="submitbutton btn btn-danger fw-bolder rounded-pill px-5 py-3 d-none">Submit</button></div>
                    </div>
                </div>
            </div>
        </form>
        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>