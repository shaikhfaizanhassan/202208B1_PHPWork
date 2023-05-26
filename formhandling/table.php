<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User operator table</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>enter table</td>
                <td><input type="text" name="txttable"></td>
            </tr>
            <tr>
                <td>enter table Range</td>
                <td><input type="text" name="txtrange"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn"></td>
            </tr>     
        </table>
    </form>
    <?php 
        if(isset($_POST["btn"]))
        {
            $table = $_POST["txttable"];
            $range = $_POST["txtrange"];

            for($i=1; $i<=$range;$i++)
            {
                echo $table . " X " . $i . " = " . $table * $i ."<br>";
            }
            

        }

    ?>



</body>
</html>