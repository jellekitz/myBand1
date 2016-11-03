<?php

$result2 = $mysqli->query("SELECT * FROM tours ORDER BY id ");

$result2 = convertResultToArray($result2);