<?php 
    include("connection.php");
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
        <h1>User Register</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Name</label>
                <input type="text" name="txtname" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="txtemail" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="txtpass" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Image:</label>
                <input type="file" name="filename" class="form-control" id="pwd">
            </div>
            
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" name="reg" class="btn btn-primary">Submit</button>
        </form>

        <?php 
            if(isset($_POST["reg"]))
            {
                $name = $_POST["txtname"];
                $email = $_POST["txtemail"];
                $password = $_POST["txtpass"];
                $imagename = $_FILES["filename"]["name"];
                $temp_location = $_FILES["filename"]["tmp_name"];

                move_uploaded_file($temp_location,"uimage/".$imagename);


                $q = mysqli_query($con,"INSERT INTO `usertb`(`uname`, `uemail`, `upass`,`uimage`) VALUES ('$name','$email','$password','$imagename')");
                if($q>0)
                {
                    echo "<script>alert('Create Successfully')</script>";
                    header("location:login.php");
                }
                else
                {

                }
            }

        ?>
    </div>
</body>

</html>