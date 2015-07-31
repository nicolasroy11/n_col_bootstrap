<?php
//Page Initializers
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('US/Pacific');

$servername = "localhost";
$username = "root";
$password = "root";
$db = "nickdontcare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{echo "Connected successfully";}

//mysqli_select_db($conn, $db) or die("Unable to select database");

$query = "show tables";
$results = mysqli_query($conn, $query) or die(mysql_error());;
//var_dump($results);

//Include global variables - information that does not change regardless of current page
	//include('includes/global_var.php');
	
//Page Specific Variables and Functions
	define("TITLE", "PHP Test Page 1");
	$fave_foods = array("sushi", "poutine", "crepes");
	function enumfoods()
		{
			global $fave_foods;	//without this, $fave_foods is undeclared in the scope of the function
								//the array can also be passed in as an argument.
			foreach ($fave_foods as $fave_food)
			{
				echo "I love $fave_food,<br>";
			}
		}
	
//Include header (important - contains opening <body> tag)
	include('includes/header.php');
	
//Body Contents
?>

<div class="container">
<div class="row-fluid">
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
	</div><!--row-fluid-->

	<div class="row-fluid">
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
	</div><!--row-fluid-->

	<div class="row-fluid">
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
		<div class="col-fluid">
			<p class="test"></p>
		</div><!--col-fluid-->
	</div><!--row-fluid-->
</div><!--container-->

<div class="container">
	<input type="button" onclick="jsTest()">
<div>

<?php
//Include footer (important - contains closing </body> tag)
	include('includes/footer.php');
?>