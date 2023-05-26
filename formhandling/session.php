<?php 
    session_start();
    if(isset($_SESSION["useremail"])!=null)
    {
        header("location:session2.php");
    }
    else
    {
        

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                $pass = $_POST["txtpass"];

                $_SESSION["useremail"] = $email;
                header("location:session2.php");
                

            }
        ?>

</body>
</html>
<?php } ?>