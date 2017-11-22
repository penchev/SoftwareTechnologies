<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
        if(isset($_GET['num'])){
            $num = intval($_GET['num']);
            $prev1 = 0;
            $prev2 = 1;
            $fibonacci = 1;
            for($i=1;$i<=$num;$i++){
                echo $fibonacci . ' ';
                $fibonacci = $prev1 + $prev2;
                $prev1 = $prev2;
                $prev2 = $fibonacci;

            }
        }
    ?>
</body>
</html>