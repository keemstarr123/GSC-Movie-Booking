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
        $seats = array();
        $seats = [];
        $seats_alt = [];
        $screening = intval($_POST["screeningID"]);
        forEach($_POST['seats'] as $seat) {
            $seats[] = "'". $seat . "'";
            $seats_alt[] = $seat;
        };
        $seatsID = implode(", ", $seats); 
        $seatsID_alt = implode(", ", $seats_alt); 
        $sql = "SELECT SUM(SeatPrice) AS TotalAmount FROM seats WHERE seat_ID IN ($seatsID);";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_object($result);
        $price = $row->TotalAmount;
        $sql2 = "SELECT * FROM moviescreenings JOIN movies ON moviescreenings.Movie_ID = movies.Movie_ID JOIN hall ON moviescreenings.Hall_No = hall.Hall_No WHERE Screenings_ID = $screening";
        $result2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_object($result2);
        $moviename = $row2->MovieName;
        $hall = $row2->Hall_No;
        $date = $row2->ShowtimeDate;
        $time = $row2->Showtime;
        
    ?>

    
    
    </head>
    <body class="bg-black overflow-hidden" style="height:100vh">
        <nav class = "navbar navbar-expand p-3 pb-0 justify-content-between" style="height:10vh;background-color:black;width:100%">
            <img class = "d-block me-5" src="./New folder/GSCLogo.webp" alt="GSCLogo" style="height:80%;width:20%;">
            <div class = "collapse navbar-collapse" style="height:100%;">
                <ul class = "navbar-nav h-100" style="font-size:18px;position:relative;bottom:-30%;">
                    <li class = "nav-item" >
                        <a class = "nav-link text-white" href="GSC_LandPage.php">Home</a>
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
        <form action="PurchaseSuccess.php" method="POST">
            <div class="container-fluid" style="height:90%;padding:3% 10%">
                <div class="row rounded-4 h-100" style="box-shadow:0 10px 50px 10px #D8D9DA;">
                    <div class="col-5 py-4 bg-warning bg-gradient" style="border-radius: 15px 0 0 15px">
                    <?php 
                        echo 
                        "
                        <center><h2 class='py-2 mt-2 fw-bolder '>Booking details</h2></center>   
                        <div class = 'col-12 fw-bold h3 mt-4 px-4'>$moviename</div>
                        <div class = 'col-12 fw-bold h5 px-4 my-'>Date: <span class = 'fw-lighter'>$date</span></div>
                        <div class = 'col-12 fw-bold h5 px-4 '>Time: <span class = 'fw-lighter'>$time</span></div>
                        <div class = 'col-12 fw-bold h5 px-4 '>Hall: <span class = 'fw-lighter'>$hall</span></div>
                        <div class = 'col-12 fw-bold h5 px-4'>Seat: <span class = 'fw-lighter'>$seatsID_alt</span></div>
                        <div class = 'col-12 fw-bold h5 px-4'>Payment due: <span class = 'fw-lighter text-danger fw-bolder'>RM$price.00</span></div>
                        <div class = 'col-12 fw-bold h5 px-4 my-5 fw-light'>**Please double check the details above and make payment within <span class='fw-bolder text-danger'>15 minutes</span>.</div>
                        ";
                    ?>
                    </div>
                    <div class="col-7 p-5 bg-light bg-gradient row justify-content-between" style="border-radius: 0px 15px 15px 0px">
                            <div class="col-12 fw-bold h-auto h5">Customer details: </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label for="FirstName" class="col-12 mb-2">First Name:</label>
                                    <input type="text" placeholder="Eg. Ronaldo" name="FirstName" class="form-control" id="FirstName" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label for="LastName" class="col-12 mb-2">Last Name:</label>
                                    <input type="text" placeholder="Christiano" name="LastName" class="form-control" id="LastName" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label for="Email" class="col-12 mb-2">Email Address:</label>
                                    <input type="email" placeholder="ronaldo@gmail.com" name="Email" class="form-control" id="Email" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label for="PhoneNumber" class="col-12 mb-2">Phone Number:</label>
                                    <input type="text" placeholder="0123456789" name="PhoneNumber" class="form-control" id="PhoneNumber" required>
                                </div>
                            </div>
                            <div class="col-12 fw-bold h-auto h5 mt-3">Credit/Debit Card Information: </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <label for="CardNumber" class="col-12 mb-2">Card Number</label>
                                    <input type="text" placeholder="" pattern="[0-9]{16}"name="CardNumber" class="form-control" id="CardNumber" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label for="ExpiryDate" class="col-12 mb-2">Expiry Date</label>
                                    <input type="text" placeholder="MM/YY"  pattern="[0-1][0-9]/[0-9]{2}" name="ExpiryDate" class="form-control" id="ExpiryDate" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label for="CVV" class="col-12 mb-2">CVV</label>
                                    <input type="password" placeholder=""  pattern="[0-9]{3}"name="CVV" class="form-control" id="CVV" required>
                                </div>
                            </div>
                            <div class="col-12 row justify-content-end px-0 mt-4">
                                <div class="col-3 px-0"><button class="h-75 w-100 btn btn-warning" >Pay Now</button></div>
                            </div>
                            
                    </div>
                    <?php 
                    echo "
                    <input type='hidden' name = 'Screening_ID' value='$screening'>
                    <input type='hidden' name = 'price' value='$price'>";
                    forEach($_POST['seats'] as $seat) {
                        echo "<input type='checkbox' class = 'd-none' name = 'seats[]' value='$seat' checked>";
                    };
                    ?>
                </div>
                
            </div>
        </form>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>