<html>
<head>
	<link rel="stylesheet" href="/fluid.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script>
		function jsTest()
			{
    			$(".col-fluid").css("background-color","green");
			}

		$( document ).ready(function() {
		    $(".row-fluid").each(function()
		    	{
				    var count = $(this).children(".col-fluid").length;
				    //alert(count);
				    var width = $(".container").width()/count;
				    $(this).children(".col-fluid").css('width', width);
				    //alert($(this).children(".col-fluid").width());
				    $(this).children(".col-fluid").css('height', width);
				    //alert($(this).children(".col-fluid").height());
				}
		    );
		});
	</script>
	<title><?php echo TITLE; ?></title>
</head>
<body>