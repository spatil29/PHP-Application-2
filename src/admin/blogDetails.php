<?php
/*
*To Display blog details
*/
session_start();

echo '<style>#header {font-size:1.5em;margin-left:5px;margin-right:10px;margin-top:50px;background-color:#F5DEB3;font-style:italic;}</style>';
	
	$title="Title:";
	$blogStatus="Blog Status:";
	if(isset($_SESSION)){
		$blogTile= $_SESSION ['.$dataTile.'];
		$blogContent= $_SESSION['.$dataContent.'];
	}
	echo '<div id="header">Details of blog..</div></br>';
	echo  $title." ".$_SESSION ['.$dataTile.'];
	echo  $blogStatus." ".$_SESSION['.$dataContent.'];
	echo '</div>';
	unset($_SESSION['$dataTile']);
	unset($_SESSION['$dataContent']);
?>