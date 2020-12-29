<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="show"></div>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function (){
		setInterval(function (){
			$('#show').load('trackmodule.php')
		}, 3000);
	});
</script>
</body>
</html>