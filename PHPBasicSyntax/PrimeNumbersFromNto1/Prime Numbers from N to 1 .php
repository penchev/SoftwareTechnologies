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
            $prime = true;
            for($i=$num;$i>1;$i--){
                for($j=2;$j<$i;$j++){
                    if($i%$j==0) {
                        $prime = false;
                        break;
                    }
                }
                if($prime){
                   echo $i . ' ';
                }
                $prime = true;
            }
        }
    ?>
</body>
</html>