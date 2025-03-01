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

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Date1'])) {
            $date1 = $_POST['Date1'];
            $date2 = $_POST['Date2'];
            $sql = "SELECT * FROM TicketSales JOIN moviescreenings ON ticketsales.Screenings_ID = moviescreenings.Screenings_ID JOIN movies ON moviescreenings.Movie_ID = movies.Movie_ID JOIN customer ON ticketsales.Customer_ID = customer.Customer_ID WHERE DatePurchase Between '$date1' AND '$date2';";
            $result = mysqli_query($con, $sql);
        }
        $counter = 0;
        $earnings = 0;
        
    ?>
    </head>
    <body class="bg-black " style="height:100vh">
        <nav class = "navbar navbar-expand p-3 pb-0 justify-content-between" style="height:10%;background-color:black;width:100%">
            <img class = "d-block me-5" src="./New folder/GSCLogo.webp" alt="GSCLogo" style="height:80%;width:20%;">
            <div class = "collapse navbar-collapse" style="height:100%;">
                <ul class = "navbar-nav h-100" style="font-size:18px;position:relative;bottom:-30%;">
                    <li class = "nav-item" >
                        <a class = "nav-link text-white" href="AdminMenu.php">Menu</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link text-white" href="AddScreening.php">Add New Screening</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link fw-bold active text-white" href="AssessEarnings.php">Assess Earnings</a>
                    </li>
                </ul>
                <a  class="nav-item btn btn-danger rounded-3 p-2 px-4 py-2 h5 fw-bold text-dark link-underline link-underline-opacity-0" href="GSC_LandPage.php" style="position:relative;left:53%;bottom:-10%">Log out</a>
            </div>
        </nav>
        <div class="container-fluid d-flex flex-column px-4 mt-5" style="height:80%;">
            <h3 class="text-white fw-bold px-4 mb-4">Choose date: </h3>
            <form action='' class = '' method='POST'>
                <div class="row px-4" style="height:10vh;">
                    <div class="col-5">
                        <div class="input-group row">
                            <label for="Date1" class="text-white h5 fw-lighter" >Date 1:</label>
                            <div class="col-11 mt-2">
                            <input type="date" id="Date1" class ="form-control" name="Date1" required>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="input-group row">
                            <label for="Date2" class="text-white h5 fw-lighter">Date 1:</label>
                            <div class="col-11 mt-2">
                            <input type="date" id="Date2" class ="form-control" name="Date2" required>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-2 d-flex align-items-end justify-content-start">
                        <button class="btn btn-warning bg-gradient rounded-pill px-4 py-2">Search</button>
                    </div>
                    
                </div>
                <input type='hidden' name='screeningID'>
            </form>
            <div class="h-75 mt-4 px-4" class>
                <?php
                if (isset($_POST['Date1'])) {
                    echo "<h3 class='text-white fw-bold mb-4'>Result: </h3>
                    <div class='mt-3 bg-white overflow-auto' style='height:60%'>
                        <table class='table table-striped rounded-5'>
                            <tr>
                                <th>#</th>
                                <th>Customer</th>
                                <th>Date Purchase</th>
                                <th>Movie</th>
                                <th>Amount Paid</th>
                                <th>Card Info</th>
                            </tr>";
                };
                
                ?>
                        <?php 
                        if (isset($_POST["Date1"])) {
                            while ($row = mysqli_fetch_object($result)) {
                                $counter++;
                                $customer = $row->FirstName . ' ' .$row->LastName;
                                $date = $row->DatePurchase;
                                $movie = $row->MovieName;
                                $Amount = $row->AmountPaid;
                                $cc = $row->CC_Info;
                                $earnings+= $Amount;
                                echo 
                                "
                                <tr>
                                    <td>$counter</td>
                                    <td>$customer</td>
                                    <td>$date</td>
                                    <td>$movie</td>
                                    <td>RM$Amount.00</td>
                                    <td>$cc</td>
                                <tr>
                                ";
                            };
                        };
                        ?>
            <?php 
            if (isset($_POST["Date1"])) {
                echo "
                        </table>
                    </div>
                    <div class='h-25 text-white row justify-content-end rounded-5'>
                        <div class='col-5'>
                            <table class='table table-warning table-striped rounded-5'>
                                <tr>
                                <th>Total Earnings FROM <span class='text-danger'>$date1</span> TO <span class='text-danger'>$date2</span>:   </th>
                                <th>
                                <span class='text-success'>RM$earnings.00</span>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                ";
            };
            ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        

    </body>
</html>