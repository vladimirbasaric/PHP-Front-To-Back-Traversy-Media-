<?php
// People Array @TODO - Get from DB
$people[] = "Steve";
$people[] = "Vlad";
$people[] = "Brad";
$people[] = "Marko";
$people[] = "Matija";
$people[] = "Vuk";
$people[] = "Mirko";
$people[] = "Branko";
$people[] = "Nemanja";
$people[] = "Uros";
$people[] = "Dusan";
$people[] = "Vasilije";
$people[] = "Nikola";
$people[] = "Savo";
$people[] = "Goran";
$people[] = "Vladimir";
$people[] = "Branivoje";
$people[] = "Ljubisa";
$people[] = "Milan";
$people[] = "Nebojsa";
$people[] = "Dragan";
$people[] = "Dragutin";
$people[] = "Milutin";
$people[] = "Petar";
$people[] = "Vukadin";
$people[] = "Vidak";
$people[] = "Dobrivoje";
$people[] = "Miroslav";

// Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

//Get suggestions
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;