<?php 
/*
*To Display common footer
*/
if(!defined('true-access')) {
   die('Direct access not permitted');
} 
echo '<style>

	#footer {
		style="color:black;
		font-size:1em;
		margin-left:10px;
		margin-right:10px;
		margin-top:30px;
		background-color:#696969;
		color: white; "
}
</style>';
echo '</div></br></br>'; //Main container ends here
echo '</body></body>'; //html tag ends here
$displayText="Visit to Blog=";
// Counting hits from user

if (isset($_SESSION ['hitsFromUser']))
{
	 $_SESSION ['hitsFromUser'] = $_SESSION ['hitsFromUser'] + 1;
}
else
{
	  $_SESSION ['hitsFromUser'] = 1;
}
$counter = $_SESSION ['hitsFromUser'];
$resetCount=0;
											
echo '<div id="footer">';
if(isset($_GET['reset'])){
echo "<h4>$displayText$resetCount </h4>".PHP_EOL;;
session_destroy();
}else{
echo "<h4>$displayText$counter </h4>".PHP_EOL;
}

echo '<form>';
echo "<input type='submit' name='reset' value='Reset''/>".PHP_EOL;
echo '</form>';
echo '</div>';
?>
