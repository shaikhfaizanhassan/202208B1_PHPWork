<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>    
        <form action="" method="post">
            <table>
                <tr>
                    <td>Enter number</td>
                    <td><input type="text" name="txt1"></td>
                </tr>
                <tr>
                    <td>Enter number</td>
                    <td><input type="text" name="txt2"></td>
                </tr>
                <tr>
                    <td>Operator</td>
                    <td><input type="text" name="op"></td>
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
                $num1 = $_POST["txt1"];
                $num2 = $_POST["txt2"];
                $operator = $_POST["op"];


                if($operator=="+")
                {
                    $result = $num1 + $num2;
                    echo "Addition  $result";
                }
                else if($operator=="-")
                {
                    $result = $num1 - $num2;
                    echo "sub  $result";
                }
                else if($operator=="*")
                {
                    $result = $num1 * $num2;
                    echo "mul  $result";
                }
                else if($operator=="/")
                {
                    $result = $num1 / $num2;
                    echo "div $result";
                }
                else
                {
                    echo "Invalid operator";
                }
                
                
                
                
            }
        
        ?>
    </center>
</body>
</html>