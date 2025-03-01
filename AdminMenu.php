<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>GSC Cinema</title>
        <?php 
        session_start();
        $error='';
        if (!$_SESSION['loggedin']) {
            // Validate login credentials (e.g., check against a database)
            header('Location:GSC_LandPage.php');
            exit();
        }
        ?>
        <style>
            .bg-dark.bg-gradient {
                    transition: transform 2s ease-in-out; 
            }
            .bg-dark.bg-gradient:hover {
                transform:scale(1.1);
                transition: transform 2s ease-in-out;
            }
        </style>
    </head>
    <body class="bg-black">
        <nav class = "navbar navbar-expand p-3 pb-0 justify-content-between" style="height:10%;background-color:black;width:100%">
            <img class = "d-block me-5" src="./New folder/GSCLogo.webp" alt="GSCLogo" style="height:80%;width:20%;">
            <div class = "collapse navbar-collapse" style="height:100%;">
                <ul class = "navbar-nav h-100" style="font-size:18px;position:relative;bottom:-30%;">
                    <li class = "nav-item" >
                        <a class = "nav-link active fw-bold text-white" href="AdminMenu.php">Menu</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link text-white" href="AddScreening.php">Add New Screening</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link text-white" href="AssessEarnings.php">Assess Earnings</a>
                    </li>
                </ul>
                <a  class="nav-item btn btn-danger rounded-3 p-2 px-4 py-2 h5 fw-bold text-dark link-underline link-underline-opacity-0" href="GSC_LandPage.php" style="position:relative;left:53%;bottom:-10%">Log out</a>
            </div>
        </nav>
        <div class="container-fluid row row-col-2 align-items-center justify-content-center px-0" style="height:90vh;">
            <div class="col text-white rounded-4 mt-3 p-4  d-flex justify-content-end" style="width:30%;height:80%;">
                <a class="bg-dark bg-gradient bg-opacity-50 rounded-4 h-100 w-75" href="AddScreening">
                <img src="./New folder/Menu1.png" style="max-width:100%;object-fit:cover;left:1vw;top:3vh;position:relative;">
                </a>
            </div>
            <div class="col text-white rounded-4 mt-3 p-4 d-flex justify-content-start" style="width:30%;height:80%;">
                <a class="bg-dark bg-gradient bg-opacity-50 rounded-4 h-100 w-75" href="AssessEarnings.php">
                    <img src="./New folder/Menu2.png" style="max-width:100%;object-fit:cover;top:3vh;position:relative;">
                </a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        

    </body>
</html>