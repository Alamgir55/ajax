<?php 
    $continent = $_REQUEST["continent"];
    $countries = array(
        "africa" => array("Angola", "Cameroon", "Egypt", "Kenya", "Uganda"),
 "asia" => array("China", "India", "Iran", "Malaysia", "Singapore"),
 "europe" => array("France", "Germany", "Italy", "Spain", "United Kingdom"),
 "n-america" => array("Canada", "Cuba", "Jamaica", "Panama", "United States"),
 "s-america" => array("Argentina", "Brazil", "Colombia", "Peru", "Uruguay"),
 "australia" => array("Australia", "Fiji", "Kiribati", "New Zealand")
    );


if(isset($continent)){
    if(isset($countries[$continent])){
        for($i = 0; $i < count($countries[$continent]); $i++){
            echo "<option value='" . $countries[$continent][$i]. "'>" . $countries[$continent][$i] ."</option>";
        }
    }
}