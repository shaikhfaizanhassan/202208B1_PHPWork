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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
</head>
<body>
    <div class="container">
        <h1>Employee data</h1>
        <a href="index.php" class="btn btn-info">Create New Record</a>
        <br>
        <br>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Search</td>
                    <td><input type="text" name="txtsearch" class="form-control"></td>
                    <td><input type="submit" value="Search" class="btn btn-danger"></td>
                </tr>

            </table>
        </form>
        <br>
        <br>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php 
            $i = 1;
                $fetch = mysqli_query($con,"select * from employee");
                while($row = mysqli_fetch_array($fetch))
                {

            ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row['ename'] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td>
                    <a href="edit.php?editID=<?php echo $row[0] ?>" class="btn btn-primary">Edit</a>
                    <a href="read.php?deleteID=<?php echo $row[0] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <?php 
        if(isset($_GET["deleteID"]))
        {
            $dId = $_GET["deleteID"];
            $d = mysqli_query($con,"delete from employee where eid='$dId'");
            header("location:read.php");
        }
    ?>
</body>
</html>