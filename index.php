<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP Learning</title>
</head>
<body>
	These are some of the resources I use in this repository <br/>
	<ul>
		<li><a href="https://codigofacilito.com/cursos/php-profesional">Código Facilito - Curso profesional de PHP</a></li>
	</ul>
</body>
</html>

<?php
	use Extras as ext;
	require 'Extras/NamespaceClass.php';
	require 'OOP/NamespaceClass.php';

	$x = new ext\NamespaceClass();
	//echo $x->simpleFunction();
	$y = new OOP\NamespaceClass();
	//echo $y->simpleFunction();

?>