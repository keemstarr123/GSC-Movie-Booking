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
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Email = $_POST['Email'];
        $phone = $_POST['PhoneNumber'];
        $CC_Info = substr($_POST['CardNumber'],-4);
        $screening = intval($_POST['Screening_ID']);
        $seats = array();
        $price = $_POST['price'];
        

        $sql = "INSERT INTO Customer(FirstName, LastName, Email, PhoneNumber) VALUES ('$FirstName', '$LastName', '$Email', '$phone');";
        $sql2 = "INSERT INTO TicketSales(AmountPaid, DatePurchase, CC_Info, Screenings_ID, Customer_ID) VALUES ($price, DATE(SYSDATE()),$CC_Info, $screening, LAST_INSERT_ID());";
        $seat_sql = array();
        forEach($_POST['seats'] as $seat) {
            $seat_sql[] = "INSERT INTO Seat_TicketSales(Ticket_ID, Seat_ID) VALUES (LAST_INSERT_ID(), '$seat')";
        };
        $result1 = mysqli_query($con,$sql);
        $result2 = mysqli_query($con,$sql2);
        forEach($seat_sql as $seat) {
            $result_Seat = mysqli_query($con,$seat);
        };
        ?>

    
    
    </head>
    <body class="bg-black overflow-hidden" style="height:100vh">
        <nav class = "navbar navbar-expand p-3 pb-0 justify-content-between" style="height:10vh;background-color:black;width:100%">
            <img class = "d-block me-5" src="./New folder/GSCLogo.webp" alt="GSCLogo" style="height:80%;width:20%;">
            <div class = "collapse navbar-collapse" style="height:100%;">
                <ul class = "navbar-nav h-100" style="font-size:18px;position:relative;bottom:-30%;">
                    <li class = "nav-item" >
                        <a class = "nav-link  text-white" href="GSC_LandPage.php">Home</a>
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
        <div class="container-fluid d-flex p-5 justify-content-center align-items-center" style="height:90%;padding:3% 10%">
            <div class = "d-flex flex-column align-items-center">
                <img src="./New folder/success.svg">
                <h4 class="text-white mt-3">Purchase sucessful!</h4>
                <a class="btn btn-warning rounded-pill px-4 py-3 mt-3" href="GSC_LandPage.php">Back to Home</a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>