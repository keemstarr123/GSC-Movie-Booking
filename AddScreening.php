<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>GSC Cinema</title>
        <?php 
        $con = mysqli_connect("localhost","root","","gsc_database","3308");
        session_start();
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $error='';
        if (!$_SESSION['loggedin']) {
            // Validate login credentials (e.g., check against a database)
            header('Location:GSC_LandPage.php');
            exit();
        }
        $sql = "SELECT * FROM Movies;";
        $result = mysqli_query($con,$sql);
        $sql2= "SELECT * FROM hall;";
        $result2 = mysqli_query($con,$sql2);
        
        ?>
    </head>
    <body class="bg-black" style="height:100vh;">
        <nav class = "navbar navbar-expand p-3 pb-0 justify-content-between" style="height:10%;background-color:black;width:100%">
            <img class = "d-block me-5" src="./New folder/GSCLogo.webp" alt="GSCLogo" style="height:80%;width:20%;">
            <div class = "collapse navbar-collapse" style="height:100%;">
                <ul class = "navbar-nav h-100" style="font-size:18px;position:relative;bottom:-30%;">
                    <li class = "nav-item" >
                        <a class = "nav-link  text-white" href="AdminMenu.php">Menu</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link fw-bold active  text-white" href="AddScreening.php">Add New Screening</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link text-white" href="AssessEarnings.php">Assess Earnings</a>
                    </li>
                </ul>
                <a  class="nav-item btn btn-danger rounded-3 p-2 px-4 py-2 h5 fw-bold text-dark link-underline link-underline-opacity-0" href="GSC_LandPage.php" style="position:relative;left:53%;bottom:-10%">Log out</a>
            </div>
        </nav>
        <form action="NMSSuccess.php" method="POST">
            <div class="container-fluid row row-col-2 align-items-center justify-content-center p-5 mx-0" style="height:90vh;width:100vw;">
                <div class="row rounded-4 h-100 w-100" >
                    <div class="col-12 p-5 bg-light bg-gradient rounded-5 row mx-0 justify-content-between">
                            <div class="col-12 fw-bold h-auto h2">New Movie Screening </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label for="MovieSelect" class="col-12 mb-2">Movie:</label>
                                    <select class="form-select" id="MovieSelect" name="Movie">
                                        <option selected>Choose...</option>
                                        <?php 
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $name = $row["MovieName"];
                                            $id = $row["Movie_ID"];
                                            echo "<option value ='$id'>$name</option>";
                                        };
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label for="Date" class="col-12 mb-2">Date:</label>
                                    <input type="date" name="Date" class="form-control" id="Date" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label for="TimeSelect" class="col-12 mb-2">Time:</label>
                                    <select class="form-select" id="TimeSelect" name="Time">
                                        <option selected>Choose...</option>
                                        <?php 
                                        for ($h =10;$h<=22;$h++) {
                                            echo "<option value='$h:00:00'>$h:00:00</option>";
                                        };
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                        <label for="HallSelect" class="col-12 mb-2">Hall:</label>
                                        <select class="form-select" id="HallSelect" name="Hall">
                                            <option selected>Choose...</option>
                                            <?php 
                                            while($row2=mysqli_fetch_assoc($result2)) {
                                                $hallno = $row2["Hall_No"];
                                                $hallseats = $row2["TotalSeats"];
                                                echo "<option value='$hallno'>Hall $hallno with $hallseats seats.</option>";
                                            };
                                            ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-12 row justify-content-end px-0 mt-4">
                                <div class="col-2 px-0"><button class="h-75 w-100 btn btn-warning" >Create</button></div>
                            </div>
                            
                    </div>
                </div>
                
            </div>
                </div>
            </div>
        </form>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; 
            var yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }

            if (mm < 10) {
                mm = '0' + mm;
            }

            today = yyyy + '-' + mm + '-' + dd;

            
            document.querySelector('#Date').min=today;
        </script>

    </body>
</html>