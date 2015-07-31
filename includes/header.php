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
		    		var col = $(this).children(".col-fluid");
				    var count = col.length;
				    var width = $(".container").width()/count;
				    col.css('width', width);
				    col.children().css('height', width);
				}
		    );
		});
	</script>
	<title><?php echo TITLE; ?></title>
</head>
<body>