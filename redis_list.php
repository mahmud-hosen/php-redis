<?php

require './vendor/autoload.php';
$redis = new Predis\Client();
 
 echo $redis->ping();
 $redis->LPUSH("tutorials", "JS");
 $redis->LPUSH("tutorials", "Mahmud");
 $redis->LPUSH("tutorials", "Hasan");
 $redis->LPUSH("tutorials", "Kamal");

 $list = $redis->lrange("tutorials", 0 ,-1);
 for($i=0; $i<= count($list); $i++)
 {
     echo $list[$i]."<br>";
 }

print_r($list);
 


?>