<?php

require './vendor/autoload.php';
$redis = new Predis\Client();
// echo $redis->ping();

 $redis->set("name", "Mahmud");
 $redis->set("name1", "Mahmud");
 $redis->set("name2", "Jamal");
 $redis->set("name3", "Moly");






?>