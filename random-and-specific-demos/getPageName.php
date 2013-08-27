<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	$currentFile = $_SERVER["PHP_SELF"];
	$parts = Explode('/', $currentFile);
	$currentPage = $parts[count($parts) - 1];
	
	// index
	// checkout
	// product
	
	if ($currentPage == 'index.php') {
		#echo "<img ....>";
	}
	else if ($currentPage == 'checkout.php') {
		#echo "<img ....>";
	}
	else if ($currentPage == 'product.php') {
		#echo "<img ....>";
	}
		
?>


<script>
	var currentFile = window.location.pathname;
	var currentPage = currentFile.substring(currentFile.lastIndexOf('/') + 1);
	alert(currentPage);
</script>

</body>
</html>















