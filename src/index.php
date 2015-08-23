<?php
/**
* Blog application
* This php consist of simple login and it will redirect to admin page
*
*/
define("true-access",true);
echo '<style>
h1{font-size:50px;color:#006633;font-weight:bold;margin-top:20px;margin-bottom: 3px;}
#theimage {vertical-align: middle;display: inline;margin-left:40px;margin-right:10px;margin-top:30px;}
body{ margin-left:80px ;margin-top:20px;}
</style>';
echo '<body>';
echo  '<h1>BloggerS</span></h1>';
echo '<h4><i>Start Blogging now..!!!</i></h4>';

echo '<form action="admin/admin.php">
		Your Name:<input type="text" name="username"/> <br/><br/>
		<input type="submit" name="submit" value="Submit"/>
	</form>';

echo '<div class="pic"><img id="theimage" src="images/blog.jpg"></div>';
	
echo '</body>';  

?>