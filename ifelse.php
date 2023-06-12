 //html:5 is bootstrap html page
 <?php include 'includes/header.php' ?>

    <h3 style="color:red"></h3>
    <?php
        echo '<h2> if else</h2>';
        //delcare $ before variable to declare variable ex for grade declare it as $grade
        $grade=90;
        //===,==,>=,<=,>,<
        if($grade>=50){
            echo '<h3 style="color:green">you are pass</h3>';
        }else{
            echo '<h3 style ="color:red">you are fail</h3>';
        }
        $letter='A';
        if($letter=='A'){
            echo "A";
        }
        elseif($letter=="B"){
            echo "B"; 
        }
        else{
            echo "other";
        }
    ?>
 <?php require 'includes/footer.php' ?>