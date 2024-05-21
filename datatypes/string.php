
<?php 
    $first_name = "Abdulla";
    $last_name = "Aurad";

    echo $first_name . " " . $last_name . "\n";

    if ($first_name == $last_name) {
        echo "The names are equal.\n";
    } else {
        echo "The names are not equal.\n";
    }

    $full_name="";
    echo "length =".strlen($first_name)."\n";
    echo strpos($full_name, "Aurad");
    $greeting = "Hello World!";
    echo str_replace("Hello", "Hi", $greeting."\n");
    echo strtoupper($first_name)."\n";
    echo strtolower($last_name)."\n";
    echo ucfirst($first_name)."\n";
    echo ucwords($full_name)."\n";

    $sentence = "How is coding in php going";
    $words = explode(" ", $sentence);
    print_r($words); 

?>
