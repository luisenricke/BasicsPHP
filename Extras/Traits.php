<?php

trait Operations{
	function add ($one,$two){
		return $one + $two;
	}

	function sub ($one,$two){
		return $one - $two;
	}
}

class TestTrait{
	use Operations;
}


$instance = new TestTrait();
echo $instance->add(1,2);

?>