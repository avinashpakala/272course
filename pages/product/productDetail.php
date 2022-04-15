<?php
$url =  $_SERVER['REQUEST_URI'];

$url_components = parse_url($url);
  
// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);

echo ' Hi '.$params['id'];


?>