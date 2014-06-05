<?php

$arr = file('cities.txt');

foreach ($arr as $key => $value) {
  $city = explode("\t", $value);
  file_put_contents('regi.txt', "INSERT INTO regions (`title`) VALUES ('" . $city[1] . "');" . "\n", FILE_APPEND);
}
