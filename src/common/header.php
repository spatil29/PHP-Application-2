
<?php 
/*
*To Display common header for blog
*/

if(!defined('true-access')) {
   die('Direct access not permitted');
} 
echo '<style>
.menu_simple ul {
    margin: 0; 
    padding: 0;
    width:185px;
    list-style-type: none;
}
.menu_simple ul li a {
    text-decoration: none;
    color: white; 
    padding: 10.5px 11px;
    background-color: #696969;
    display:block;
} 
.menu_simple ul li a:visited {
    color: white;
}
.menu_simple ul li a:hover, .menu_simple ul li .current {
    color: white;
    background-color: #5FD367;
}
#header {
    font-size:1.5em;
	margin-left:10px;
	margin-right:10px;
	margin-top:50px;
	background-color:#696969;
	 color: white; 
}
body{
	background-color:#CD853F;
    margin-right: 100px;

}
</style>';

echo '<body>';

	echo '<div id="header"><h2> Welcome to BloggerS..<h2></div><br></br>';
	
	
	echo '<div class="menu_simple">
		<ul>
		<li><a href="">Menu</a></li>
		<li><a href="#">Home</a></li>
		<li><a href="https://www.google.co.in">Explore</a></li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
		</div>';
	

	
	echo '<div style="margin-top:10px;
		margin-left:250px;
		padding:100px;
		margin-right:10px;
		font-family:sans-serif;;">'; 
	echo '</body>';
		
?>

