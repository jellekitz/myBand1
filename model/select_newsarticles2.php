<?php

//NR_ITEMS_PER_PAGE
//$page_nr
$result = $mysqli->query("SELECT * FROM newsarticles");

$result = convertResultToArray($result);