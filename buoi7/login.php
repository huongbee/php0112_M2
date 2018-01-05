<?php
 session_start();

// $_SESSION['username'] = "kpt";

// echo $_SESSION['username'];

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    </head>
    <style>
        p {
            color: red;
            margin-bottom: 20px
        }
    </style>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">

                    <h2>Login Form</h2>

                    <?php 
                            if(isset($_SESSION['message'])){
                                echo '<p>'.$_SESSION['message'].'</p>';
                                unset($_SESSION['message']);
                            }
                                
                        ?>
                    <form action="xuly-login.php" method="POST">
                        <div class="form-group">
                            <label for="username">Usename:</label>
                            <input type="text" class="form-control" name="usr" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="pw">Password</label>
                            <input type="password" class="form-control" name="pwd" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="remember" class="form-check-input" name="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>

        </div>

    </body>

    </html>