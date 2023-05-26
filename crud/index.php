<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" conte nt="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
</head>
<body>
    <div class="container">
        <h1>Create New Employee</h1> 
        <a href="read.php" class="btn btn-success">Empolyee Record</a>
        <form action="" method="POST">
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" required name="txtname" class="form-control"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" required name="txtemail" class="form-control"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" required name="txtpass" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btncreate" class="btn btn-primary"></td>
                </tr>
                
            </table>
        </form>
        <?php 
            if(isset($_POST["btncreate"]))
            {
                $name =  $_POST["txtname"];
                $email =  $_POST["txtemail"];
                $password =  $_POST["txtpass"];

                $query = mysqli_query($con,"insert into employee (ename,eemail,epassword) values 
                ('$name','$email','$password')");

                if($query > 0)
                {
                    echo '<script>swal("Data Save!", "Thank you!", "success")</script>';
                }
                else
                {
                    echo "not save";
                }
                
            }
        ?>
    </div>
</body>
</html>