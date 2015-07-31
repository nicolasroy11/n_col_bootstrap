<?php
//Page Initializers
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('US/Pacific');

$servername = "###";
$username = "###";
$password = "###";
$db = "###";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{echo "Connected successfully";}

$query = "select * FROM table";
$results = mysqli_query($conn, $query) or die(mysql_error());

//echo mysqli_num_rows($results);
$db_fetch = array();
while ($row = mysqli_fetch_array($results, MYSQL_ASSOC)) {
    array_push($db_fetch, $row["row"]);
}

//var_dump($results);


//Include global variables - information that does not change regardless of current page
	//include('includes/global_var.php');
	
//Page Specific Variables and Functions
	define("TITLE", "PHP Test Page 1");
	$letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n");
	$numbers = array("1", "2");
	function enum($array)
		{
			foreach ($array as $a)
			{
				$cols = "<div class=\"col-fluid\">";
				$cols .= "<p class=\"test\">" . $a . "</p>";
				$cols .= "</div><!--col-fluid-->";
				echo $cols;
			}
		}
	
//Include header (important - contains opening <body> tag)
	include('includes/header.php');
	
//Body Contents
?>

<div class="container">
	<div class="row-fluid">
		<?php
			enum($db_fetch);
		?>
	</div><!--row-fluid-->

	<div class="row-fluid">
		<?php
			enum($letters);
		?>
	</div><!--row-fluid-->

	<div class="row-fluid">
		<?php
			enum($numbers);
		?>
	</div><!--row-fluid-->
</div><!--container-->

<div class="container">
	<input type="button" onclick="jsTest()">
<div>

<?php
//Include footer (important - contains closing </body> tag)
	include('includes/footer.php');
?>