<?php

// https://www.tutorialspoint.com/php7/php7_scalartype_declarations.htm

declare(strict_types=1); // If you comment this, you turn off stric mode and enable coercive mode

function validate(int $number):string{
	return "You dont have any error";
}

echo validate(18);

 ?>