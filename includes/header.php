<html>
<head>
	<link rel="stylesheet" href="/fluid.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script>
		function jsTest()
			{
    			$(".test").css("background-color","green");
			}

		$( document ).ready(function() {
		    $(".row-fluid").each(function()
		    	{
				    var count = $(this).children(".col-fluid").length;
				    //alert(count);
				    var width = $(".container").width()/count;
				    var col = $(this).children(".col-fluid");
				    col.css('width', width);
				    alert(col.width());
				    col.css('height', width);
				    alert(col.height());
				}
		    );
		});
	</script>
	<title><?php echo TITLE; ?></title>
</head>
<body>