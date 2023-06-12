<?php include 'includes/header.php' ?>
    <h1>date&time manipulation</h1>
    <?php
        $date=getdate();
        echo 'date is'.'<br/>';
        echo $date['mday'].'<br/>';
        echo $date['mon'].'<br/>';
        echo $date['year'].'<br/>';

        echo "Today is : " . $date['mon'] . '/' . $date['mday'] .'/' . $date['year'].'<br/>';
        echo time().'<br/>';

        print date("m/d/y G.i:s<br>",time()) . '<br/>';
        print date("j F Y,\a\\t g.i a",time());
    ?>

<?php require 'includes/footer.php' ?>