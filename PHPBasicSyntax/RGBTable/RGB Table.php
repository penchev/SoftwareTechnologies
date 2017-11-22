<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
	<style>
		table * {
			border: 1px solid black;
			width: 50px;
			height: 50px;
		}
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>
    </tr>
    <?php
        $increase = 51;
        for($i=1;$i<=5;$i++,$increase+=51){
            echo "<tr>";
            $redcolor = "rgb($increase,0,0)";
            $greencolor = "rgb(0,$increase,0)";
            $blackcolor = "rgb(0,0,$increase)";
            echo "<td style='background-color: $redcolor'></td>";
            echo "<td style='background-color: $greencolor'></td>";
            echo "<td style='background-color: $blackcolor'></td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>