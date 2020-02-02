<?php 

$input = strtolower($_REQUEST['starting']);

$names = array("Aaron", "Abel", "Ann",
"Sarah", "Emma", "Olivia",
"Aiden", "Jacob", "Nora",
"David", "Henry", "Lucy",
"Richard", "Kevin","Jennifer",
"Bella", "Clint","George",
"William", "Ryan", "Joe",
"Nathan", "Catherine", "Rose",
"Tina", "Eva","Daisy",
"Francis", "Johanna", "Gloria");


if($input !== null){
    $output = "<ul id='suggestion-list'>";

    for($i=0; $i<count($names);$i++){

        $pos = strpos(strtolower($names[$i]), $input);
        if($pos == 0 && $pos !== false){
            $output .= "<li onclick=\"displayName('". $names[$i] ."');\">" . $names[$i] . "</li>";
        }
    }
    $output .= "</ul>";
    echo $output;
}

?>