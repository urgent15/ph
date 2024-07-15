<!DOCTYPE html>
<body>
    <table border="">
        <?php
        echo "<tr>";
        echo "<th>"." "."</th>";
        for($i=1;$i<=10;$i++){
            echo "<th>".$i."</th>";
        }
        echo "</tr>";
        for($i=1;$i<=10;$i++){
            echo "<tr>";
            echo "<th>".$i."</th>";
            for($j=1;$j<=10;$j++){
                echo "<td>".number_format($i/$j,3)."</td>";
            }
            echo "</tr>";
        }
        ?>
</body>
</html>