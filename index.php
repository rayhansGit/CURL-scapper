<!DOCTYPE html>
<html>
<head>
	<title>Ebay Scrapper</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<input type="text" name="link" id="link">
	<button class="btn btn-success" onclick="getdata()">Get Data</button>

</body>

<script type="text/javascript">
	function getdata()
	{
		var link = $('#link').val();
		$.ajax({
		 url: 'getdata.php',
		 type: 'post',
		 data:{link:link}, 
		 success: function(data) 
		 {
		 	document.write(data);
		} 
		});

	}
</script>
</html>