<html>
    <body>
    <?php
        function ricecake(){
            $m =1;
            $n=5;
            for ($row=1; $row<=5; $row++)
            {
                for ($column=$row; $column<=4; $column++)
                {
                    echo "_";
                    } 
                    for($k=1; $k<=$m; $k++)  {
                        echo "x";
                    }
                    for($c=$m; $c>1; $c--) {
                        echo "x";
                    }
                        echo "<br>";
                        $m++;
                }
                for($i=1; $i<=5; $i++) 
                {
                    for($j=$i; $j>=1; $j--) {
                        echo "_";
                    }
                    for($k=$n; $k>1; $k--) {
                        echo "x";
                    }
                    for($c=$n-1; $c >1; $c--) {
                        echo "x";
                    }
                    echo "<br>";
                    $n--;
                }
        }
    ?>
    <table>
        <tr>
            <td><?php echo ricecake(); ?></td>
            <td><?php echo ricecake(); ?></td>
            <td><?php echo ricecake(); ?></td>
            <td><?php echo ricecake(); ?></td>
        </tr>
        <tr>
            <td><?php echo ricecake(); ?></td>
            <td><?php echo ricecake(); ?></td>
            <td><?php echo ricecake(); ?></td>
            <td><?php echo ricecake(); ?></td>
        </tr>
    </table>
    </body>
</html>