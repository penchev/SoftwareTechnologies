<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
    for($i=1;$i<=9;$i++){
        if($i==1 || $i==5 || $i==9) {
            for ($j = 1; $j <= 5; $j++) {
                echo "<button style='background-color:blue'>1</button>";
            }
            echo "<br>";
        }else if($i==2 || $i==3 || $i==4){
            echo "<button style='background-color:blue'>1</button>";
            for ($j = 2; $j <= 5; $j++) {
                echo "<button>0</button>";
            }
            echo "<br>";
        }else if($i==6 || $i==7 || $i==8){
            for ($j = 2; $j <= 5; $j++) {
                echo "<button>0</button>";
            }
            echo "<button style='background-color:blue'>1</button>";
            echo "<br>";
        }
    }
?>
</body>
</html>