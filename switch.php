<?php include 'includes/header.php' ?>

    <h1>switch statement</h1>
    <?php
        $grade='A';
        switch($grade){
            case 'A':
                echo "<h2 style='color:green'> Your in A </h2>'";
                break;
            case 'B':
                echo "<h2 style='color:green'>Your in B </h2>'";
                break;
            case 'C':
                echo "<h2 style='color:red'>Your in C</h2>'";
                break;
            default:
                echo "<h2 style='color:red'> others</h2>'";
                break;
        }
    ?>
 <?php require 'includes/footer.php' ?>