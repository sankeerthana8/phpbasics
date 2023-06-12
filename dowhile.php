<?php include 'includes/header.php' ?>
    <h1>Do While</h1>
    <?php
    $grade=0;
    do{
        echo 'dowhile';
        $grade++;

    }while($grade<10);
    echo 'EXIT LOOP';
    ?>
 <?php require 'includes/footer.php' ?>