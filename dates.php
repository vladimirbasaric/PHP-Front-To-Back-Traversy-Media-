<?php

// echo date('d'); // day
// echo date('m'); // month
// echo date('Y'); // year
// echo date('l'); // day of week

// echo date ('Y/m/d');
// echo date ('d/m/Y');

// echo date ('h'); //hour 
// echo date ('i'); //Min
// echo date ('s'); //seconds
// echo date ('a'); //AM or PM

// Set time zone 
date_default_timezone_set('America/New_York');

//echo date ('h:i:sa');

$timestamp = mktime(10, 14, 54, 9, 10, 1981);

//echo $timestamp;

echo date ('m/d/Y', $timestamp);

$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');

//echo $timestamp2;

echo date('m/d/Y h:i:sa', $timestamp4);



?>