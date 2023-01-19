<html>
   <head>
        <style>
            th {

                border-style: solid;

            }
            td {

                border-style: solid;

            }
        </style>
   </head>
   <body>

        <?php
        $rad = 10;
        $kolonner = 10;

            echo "<table>";
            for ($i=1; $i<= $rad; $i++){
                echo "<tr>";
                echo "<td> $i gangen </td>";

                for ($x=1; $x<=$kolonner; $x++){
                    $gange = $x * $i;
                    echo "<td> $gange </td>";
                }

                echo "<tr>";

            }

            echo "</table>";
        ?>

   </body> 
</html>