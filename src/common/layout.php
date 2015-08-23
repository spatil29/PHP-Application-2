<?php
if(!defined('true-access')) {
   die('Direct access not permitted');
} 

function startOfPage($title = NULL, $company="IIT") {
	echo "<!doctype html>  ".PHP_EOL;
	echo "<html>           ".PHP_EOL;
	echo "<head>           ".PHP_EOL;
	if (isset($title))
	{
		echo "<title>$company - $title</title>". PHP_EOL;
	}
	echo "</head>          ".PHP_EOL;
	echo "<body>           ".PHP_EOL;
}
function endOfPage() {
	echo "</body>          ".PHP_EOL;
	echo "</html>          ".PHP_EOL;
}

function h1($content, $class="") {
	echo "<h1 class='$class'>$content</h1>";
}
function calculatePageWidth($currentWidth  = 500)
{
	return $currentWidth  - 300;
}

?>