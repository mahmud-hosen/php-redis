<?php

require './vendor/autoload.php';
$redis = new Predis\Client();

// $redis->HSET("student", "100", "Mahmud");
// $redis->HSET("student", "101", "Jamal");
// $redis->HSET("student", "102", "Kamal");
// $redis->HSET("student", "103", "Rahim");
// $redis->HSET("student", "104", "Habib");

// $list = $redis->HGET("student",-1);
// echo $list;

$redis->HMSET("warlord", array(
"name" => "Nobunaga",
"country" => "Japan",
"star" => 5

));

print_r($redis->hgetall("warlord"));
echo $redis->hget("warlord", "country") . "<br>";

 print_r($redis->time());
?>