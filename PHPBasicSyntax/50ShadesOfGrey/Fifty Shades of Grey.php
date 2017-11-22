<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style> 
</head>
<body>
<?php
    for($i=1,$increase=0;$i<=5;$i++,$increase+=51){
        for($j=1,$index=0;$j<=10;$j++,$index+=5){
            $colorIndex = $increase+$index;
            $color = "rgb($colorIndex,$colorIndex,$colorIndex)";
            echo "<div style='background-color: $color'></div>";
        }
        echo "<br>";
    }
?>
</body>
</html>