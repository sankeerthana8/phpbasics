<?php include 'includes/header.php' ?>

    <h1>Strings</h1>
    <?php
        $word='student';
        $phrase=' is clever';
        //concatenation
        echo $word.$phrase;
        /*
        .ucfirst-changes first letter into upper example-max to Max
        .ucwords changes first letter in words to capital example Max William M&W capital
        .strtolower-changes all letters into lower case example-MAX to max
        .strtoupper-changes all letters to capital ex-max to MAX
        .str-repeat is used to repeat string
        .substr-takes variable ,no before ,no after example for word student is i give substr($word,2,5) then res as udent 
        .strpos is used to get position
        .strchr is used to search character
        .strlen-length of string
        .trim is used to trim spaces,.ltrim for left,.rtrim for right
        .str_replace(original word,wnat to replace word,variable) is used to replace one string with other
        */
        echo '<br/>';
        //uppercase uc first change first letter only
        echo 'use of ucfirst ' . ucfirst($word).'<br/>';
        echo 'use of ucwords' . ucwords($phrase).'<br/>';
        echo 'use of strtoupper' .strtoupper($word).'<br/>';
        $Lower='MAX';
        //lowercase strtolower changes everything to lower
        echo 'lower case is ' .strtolower($Lower).'<br/>';  
        echo 'repeat string ' .str_repeat('ok',5).'<br/>';
        echo "substring is " .substr($word,2,5).'<br/>';
        echo "pos is " .strpos($word,'d').'<br/>';
        echo "find N:"  .strchr($word,'n').'<br/>';
        echo "find W: "  .strchr($word,'W').'</br>';
        echo "length is : " .strlen($word).'<br/>';
        echo 'without trim:'."A"." B C D "." E".'<br/>';
        echo "trim both sides is : ". "A" . trim(" B C D "). "E".'<br/>';
        echo "trim left is : ". "A" . ltrim(" B C D "). "E".'<br/>';
        echo "trim right is : ". "A" . rtrim(" B C D "). "E".'<br/>';
        echo "string replace: " .str_replace("is","okay",$phrase);
        ?>

<?php require 'includes/footer.php' ?>