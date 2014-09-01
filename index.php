<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nonting = "kalopps";
        $frankfurt = "Frank";
        $peeer = "beeer";
        $rest = substr("majsen", 1, -2);
        echo $peeer . "<br>" . $frankfurt . "<br>" . $nonting . "<br>";
        echo $rest . "<br>";


        if (substr($peeer, 1, -1) == "eee") {
            echo "Korrekt!";
        } else {
            echo "Fel-fel-fel-fel-fem";
        }
        ?>
    </body>
</html>
