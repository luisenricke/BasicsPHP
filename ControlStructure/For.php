<?php

for($loop = 0; $loop < 10; $loop++){
	echo "itearation $loop <br/>";
}

$arrayIndexed = array('apple','google','facebook');

for($loop = 0; $loop < sizeof($arrayIndexed); $loop++){
	echo "array $loop {$arrayIndexed[$loop]} <br/>";
}

?>