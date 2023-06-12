<?php include 'includes/header.php' ?>
    <h1>Array</h1>
    <?php
        //variable
        $num=3;
        //array
        $num1=array(1,2,3,4,5,6);
        echo $num1[4];
        echo "<p>$num1[3]</p>";

        $size=count($num1);
        echo "<h2> size is :$size<h2/>";

        for($count=0;$count<$size;$count++){
           // echo $num1[$count];
            echo "<p>$num1[$count]</p>";
        }
    ?>
 <?php require 'includes/footer.php' ?>