
<!DOCTYPE html>
<html>
<body>

<form action="" method="get">
Enter 1 number: <input type="text" name="num"><br>
<input type="submit"><br>
<?php
    if(isset($_GET["num"]) && trim($_GET["num"]) != ""){
        $a = $_GET["num"];
        $a = $a%5;
        switch($a){
            case 0:
                echo "Hello";
                break;
            case 1:
                echo "How are you?";
                break;
            case 2:
                echo "I'm doing well, thank you";
                break;
            case 3:
                echo "See you later";
                break;
            case 4:
                echo "Good-bye";
                break;
            default:
                break;
        }
    }
?>
</form>

</body>
</html>