<?php
/**
* Blog application
* user can upload blog entry that consists of title and bolg text.
*
*/
echo '<style>textarea{ width: 600px; height:100px;   resize:none;}
#image{ width="50";height="30;}</style>';
session_start();
define("true-access",true);
include("../common/layout.php");
define ("data_file_path","blogEntries.blog");
define ("data_file_path_tile","blogTitle.blog");
define ("form_blog_input_name","blog");
define ("form_blog_input_title","title");
define ("image_location","../admin/");
define ("special_separator","_ieudfoascr#####adas_");
include ("../common/header.php") ; //Include header file

function upload_blog_entry()
{
	//writting data into files.
	$inputData = $_POST[form_blog_input_name];
	$inputTitle=$_POST[form_blog_input_title];
	$inputDataContent=file_put_contents(data_file_path,htmlspecialchars($inputData).special_separator.PHP_EOL,FILE_APPEND | LOCK_EX);
	$inputTitleContent=file_put_contents(data_file_path_tile,htmlspecialchars($inputTitle).special_separator.PHP_EOL,FILE_APPEND | LOCK_EX);
	
	upload_file_check();
		
		echo '<h4>Your blog is uploaded</h4>';
}

function print_page_title()
{
	echo '<h3> Now Build a Network </br>Submit Your Blog here.....</h3>';
}
function read_data()
{	
	// readind data from file
	if (file_exists(data_file_path_tile)){
				$allBlogs = file_get_contents(data_file_path_tile);
				$dataTile = str_replace(special_separator,"<br>",$allBlogs);
				$count = substr_count($dataTile, "\n");
		
		if($count==5){
					unlink('blogTitle.blog');
					  $count=0;
			}
	
		echo '<a href="blogDetails.php">'. $dataTile .'</a>'.PHP_EOL;
		
 }
	if (file_exists(data_file_path)){
				$allBlogs = file_get_contents(data_file_path);
				$dataContent = str_replace(special_separator,"<br>",$allBlogs);
				
		}
		
		if(isset($_SESSION)){
						$_SESSION['.$dataTile.']=$dataTile;
					$_SESSION['.$dataContent.']=$dataContent;
				}	
			
			

  }
  function upload_file_check(){
	move_uploaded_file($_FILES['file1']['tmp_name'], '../admin/'.$_FILES['file1']['name']); // move uploaded file to location
		$image=$_FILES["file1"]["name"]; /* Displaying Image*/
		$imagePath="../admin/$image";
		if(!isset($_FILES['.$image.'])){
		echo '<h6>Image uploaded by user</h6>';
						echo "<img src=\"../admin/$image\">";
					
	
	}
}  
  
function display_form()
{
	echo '<form enctype="multipart/form-data" method="POST">'.PHP_EOL;
	echo '<input type="text" placeholder="Title" name="'.form_blog_input_title.'" maxlength="15"></input>'.PHP_EOL;
	echo '<textarea  name="'.form_blog_input_name.'" placeholder="Enter blog status"></textarea>'.PHP_EOL;
	echo '<input type="file" name="file1" />'.PHP_EOL;
	echo '<input type="submit"/>'.PHP_EOL;
	echo '</form>'; 
}

function create_link()
{
	echo '<a href="?">View Blogs</a><br></br>';
}
//some sort of update happened
if (!empty($_POST)) {
	upload_blog_entry();
	create_link();
}
else //regular viewing of the page
{
	print_page_title();
	read_data();
	display_form();

	
}
include ("../common/footer.php"); //Include footer file
endOfPage();

?>
