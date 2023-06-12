    <?php include 'includes/header.php' ?>
    <h1>hello world-php</h1>
    <br/>
    <?php
        echo "welcome";
        echo "<br/>";//br is for space btw lines
        echo "line2";
    ?>

    <?php
    //declaration of variable
        $name="sam";
    //calling the variable
        echo "<br/>";
        echo "$name";
        // concatinating name
        echo '<h1> name is :'.$name.' <h1/>';
        //or
        echo "<h1> name is : $name<h1/>";
    ?>
    
    <?php require 'includes/footer.php' ?>
