<?php 
    include("connection.php");
    session_start();
    if(isset($_SESSION["uname"])!=null)
    {
        header("location:Admin/index.php");
    }
    else{

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
        <h1>User Login</h1>
        <form action="" method="POST">
            
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="txtemail" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="txtpass" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" name="log" class="btn btn-danger">Login</button>
        </form>

        <?php 
            if(isset($_POST["log"]))
            {
            
                $email = $_POST["txtemail"];
                $password = $_POST["txtpass"];


                $q = mysqli_query($con,"select * from usertb where uemail='$email' AND upass='$password'");
                $check = mysqli_num_rows($q);
                $a = mysqli_fetch_array($q);
                if($check>0)
                {
                    $_SESSION["uname"] = $a[1];
                    $_SESSION["uimage"] = $a[4];
                    
                    
                    header("location:Admin/index.php");
                }
                else
                {
                    echo "<h1>Login Failed</h1>";
                }
            }

        ?>
    </div>
</body>

</html>
<?php } ?>