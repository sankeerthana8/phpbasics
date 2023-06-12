<?php include 'includes/header.php' ?>

    <h1>While loop</h1>
    <?php
        $count=0;
        while($count<10)
        {
            echo $count;
            $count++;
        }
    ?>    
 <?php require 'includes/footer.php' ?>