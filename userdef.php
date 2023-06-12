<?php include 'includes/header.php' ?>

    <h1>functions</h1>
    <?php

        function writemessage(){
            echo "hello";
        }

        writemessage();
        echo "<hr/>";


        function addition($num1,$num2){
            $sum=$num1+$num2;
            echo $sum;
        }
        addition(10,20);
    ?>

<?php require 'includes/footer.php' ?>