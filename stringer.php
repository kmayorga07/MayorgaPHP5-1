<?php
//get data
$name = filter_input(INPUT_POST, 'name');
$quote = filter_input(INPUT_POST, 'quote');

//string that will be manipulated and copied
$strquote = trim($quote);
$strname = trim($name);

$length = strlen($strquote);
$word = str_word_count($strquote);

?>

<!DOCTYPE html>

<html>

<head>
  <title>Name Phrase</title>
</head>

<body>
    
    The favorite saying of <?php echo $strname; ?> is..<br>
    <span><?php echo $strquote; ?>.</span><br>
    <span>That quote consists of <?php echo $length; ?> characters and <?php echo $word; ?> words.</span><br>
    
    <br>
    As a heading or title, it looks like this.. <br>
    <?php echo $strquote = ucwords($strquote); ?>
    
     <br>
    Or maybe like this.. <br>
    <?php echo $strquote = strtoupper($strquote); ?>
    
    <!--bring back to lowercase-->
    <?php $strquote = strtolower($strquote); ?>
    
    <br><br>
    With the vowels replaced with stars it would look like this..<br>
    <?php
    $string = $strquote;
    $patterns = array();
    $patterns[0] = '/a/';
    $patterns[1] = '/e/';
    $patterns[2] = '/i/';
    $patterns[3] = '/o/';
    $patterns[4] = '/u/';
    $patterns[5] = '/y/';
    $replacements = array();
    $replacements[0] = '*';
    $replacements[1] = '*';
    $replacements[2] = '*';
    $replacements[3] = '*';
    $replacements[4] = '*';
    $replacements[5] = '*';
    echo preg_replace($patterns, $replacements, $string);
    ?>
    
    <br><br>
    Here are the individual words<br>
    <?php  
    $strquotearray = explode(' ', $string);
    
    $counter_string =  '';
    for ($count = 0; $count < count($strquotearray); $count++) {
        $counter_string .= $strquotearray[$count] . '<br>';
    }
    echo $counter_string;
    ?>
</body>

</html>