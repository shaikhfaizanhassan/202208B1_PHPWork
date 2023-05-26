<?php 
    include("connection.php");
    if(isset($_GET["editID"]))
    {
        $f = $_GET["editID"];
        $select = mysqli_query($con,"select * from employee where eid='$f'");

        $r = mysqli_fetch_array($select);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
</head>
<body>
    <div class="container">
        <h1>Edit Employee</h1> 
        <a href="read.php" class="btn btn-success">Empolyee Record</a>
        <form action="" method="POST">
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" required name="txtname" value="<?php echo $r[1] ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" required name="txtemail" value="<?php echo $r[2] ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" required name="txtpass" value="<?php echo $r[3] ?>" class="form-control"></td>
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
                $f = $_GET["editID"];
                $name =  $_POST["txtname"];
                $email =  $_POST["txtemail"];
                $password =  $_POST["txtpass"];

                $update = mysqli_query($con,"update employee set ename='$name', eemail='$email',epassword='$password' where eid='$f'");
                
                if($update > 0)
                {
                    header("location:read.php");
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