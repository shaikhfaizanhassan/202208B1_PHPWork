<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
    <center>
        <div class="container">
            <h1>Login Page</h1>
        <form action="" method="post">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="txtemail" autocomplete="true" class="form-control"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="txtpass" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Login" class="btn btn-danger" name="login"></td>
                </tr>
        </table>
            
        </form>











        <?php 
            if(isset($_POST["login"]))
            {
                $email = $_POST["txtemail"];
                $password = $_POST["txtpass"];

                $e  = "faizan@gmail.com";
                $p = "123456";

                if($email ==$e && $password==$p)    
                {
                    
                    header("location:dashboard.php");
                    
                    
                }
                else
                {
                    echo "Login Failed";
                }
                
            }
        ?>
        </div>
       </center>
</body>
</html>