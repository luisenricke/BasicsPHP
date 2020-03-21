<?php

/*
	Reference:
	* https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double
 */

$dev = "Luis Villalobos";
$breakLine = "<br/>";
$simpleQuotes = 'This message doesn\'t show';

echo nl2br("Hello $dev \r\n this \t is a break line").$breakLine;
echo "\"This is important text\"".$breakLine;
echo "Give me my \$$$".$breakLine;

echo 'this simple text doesn\t show the variables because all inside is handled by text. $simpleQuotes'.$breakLine;

echo $breakLine.$breakLine;

echo <<<HEREDOC_TEST
HEREDOC TEST
Lorem ipsum do reprehenderit laborum irure et sit aliqua deserunt nulla consequat dolore $breakLine incididunt qui id anim aliquip eiusmod laborum sunt aute laboris consectetur reprehenderit incididunt pariatur et ullamco qui sit velit et \t quis minim sint dolor dolor pariatur culpa magna anim occaecat duis pariatur officia id ex excepteur cupidatat aute in occaecat exercitation dolor culpa est ad officia ut irure esse et aliquip nulla ad cillum adipisicing voluptate ut dolor quis commodo do commodo sed consectetur dolore sit minim enim sed excepteur ullamco exercitation voluptate adipisicing exercitation deserunt nulla officia nulla velit pariatur laborum fugiat ut sunt excepteur do in velit laboris cupidatat tempor incididunt est sint cillum sint qui magna id laboris laboris aute consequat incididunt non ut pariatur ullamco in sit eiusmod sunt ad et laboris nisi aliqua mollit in eiusmod irure sit mollit labore sunt cillum amet minim in deserunt aliqua dolore cillum in dolor nostrud veniam dolor excepteur qui dolore. $dev
HEREDOC_TEST;

echo $breakLine.$breakLine;

echo <<<'NEWDOC_TEST'
NEWDOC TEST
Lorem ipsum do reprehenderit laborum irure et sit aliqua deserunt nulla consequat dolore $breakLine incididunt qui id anim aliquip eiusmod laborum sunt aute laboris consectetur reprehenderit incididunt pariatur et ullamco qui sit velit et \t quis minim sint dolor dolor pariatur culpa magna anim occaecat duis pariatur officia id ex excepteur cupidatat aute in occaecat exercitation dolor culpa est ad officia ut irure esse et aliquip nulla ad cillum adipisicing voluptate ut dolor quis commodo do commodo sed consectetur dolore sit minim enim sed excepteur ullamco exercitation voluptate adipisicing exercitation deserunt nulla officia nulla velit pariatur laborum fugiat ut sunt excepteur do in velit laboris cupidatat tempor incididunt est sint cillum sint qui magna id laboris laboris aute consequat incididunt non ut pariatur ullamco in sit eiusmod sunt ad et laboris nisi aliqua mollit in eiusmod irure sit mollit labore sunt cillum amet minim in deserunt aliqua dolore cillum in dolor nostrud veniam dolor excepteur qui dolore. $dev
NEWDOC_TEST;

echo $breakLine.$breakLine;

echo 'this is a example of concatanation ' .' by ' . $dev . $breakLine;
echo "this is a example of interpolation by {$dev}" . $breakLine;


?>