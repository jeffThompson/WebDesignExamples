<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Validating Email Addresses</title>
</head>

<body>

<!-- a simple way to check that emails are valid -->
<?php

	echo "<p>";

	# good emails pass
	$email = "mail@jeffreythompson.org";
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo '"' . $email . '" = good';
	}
	else {
		echo '"' . $email . '" = bad';
	}
	
	echo "</p><p>";
	
	# bad emails do not!
	$email = "foo";
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo '"' . $email . '" = good';
	}
	else {
		echo '"' . $email . '" = bad';
	}
	
	echo "<p>";
?>

</body>
</html>