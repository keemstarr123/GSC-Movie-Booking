<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>GSC Cinema</title>
        <?php 
        session_start();
        $error='';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validate login credentials (e.g., check against a database)
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            // Simulated check for demo (replace with actual authentication logic)
            if ($username === 'Admin' && $password === 'GSCAdmin') {
                $_SESSION['loggedin'] = true; // Set user as logged in
                header('Location: AdminMenu.php');
                exit();
            } else {
                $error = "Invalid username or password";
            }
        }
        ?>
    </head>
    <body class="bg-black">
        
        <div class="container-fluid d-flex align-items-center justify-content-center px-0" style="height:90vh;">
            <div class="col-8 text-white rounded-4 mt-3 d-flex flex-column" style="width:35%;height:80%;background-color: black;box-shadow:0 10px 50px 20px #D8D9DA;">
                <div style="height:15%">
                    <center><img class = "d-block h-75 mt-5" src="./New folder/GSCLogo.webp" alt="GSCLogo"></center>
                </div>
                <div class = "mt-4 p-5" style="height:80%">
                    <h3>Login</h3>
                    <div class="mt-3">
                        <form method="POST">
                            <div class= "form-group my-2">
                                <label for="AccountName">
                                    Username:
                                </label>
                                <input type="text" class="form-control" id="AccountName" name="username" placeholder="Username" style="width:95%">
                            </div>
                            <div class="form-group my-3">
                                <label for="AccountPassword">
                                    Password:
                                </label>
                                <input type="password" class="form-control" id="AccountPassword" name="password" placeholder="" style="width:95%">
                            </div>
                            <div class="row justify-content-between me-1">
                            <div class="text-danger col-8"><?php echo $error;?></div>
                            <button class="btn btn-warning fw-bold rounded-pill mt-2 me-3 py-2 px-3 col-auto" style=""type="submit">Submit</button>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        

    </body>
</html>