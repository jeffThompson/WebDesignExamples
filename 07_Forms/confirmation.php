<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Profile Updated!</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>

<!-- FIRST, HANDLE THE FORM -->
<?php
	
	# LOAD USERNAME AS VARIABLE
	# we load others as needed, but the username is
	# repeaeted throughout so we do this firts
	$username = $_POST['username'];
	
	#GET USER EMAIL
	$email = $_POST['email'];
	
	# check (ie "validate") to make sure it's legit
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		# we're good!
	}
	else {
		# email doesn't pass muster...
	}
	# note: we could do much fancier things at this point,
	# such as kick back to the form or show some text,
	# but we'll just leave it for the time being... :)
	
	# BODY OF EMAIL
	# start body of email with basic stuff
	# \n starts a new line
	# \t is a tab character, making formatting easier
	$body = 
	$username . ", your profile has been successfully updated!  \n\n Please review the following information to make sure it is correct:\n" .
	"Username:\t\t\t" . $username . "\n" .
	"Email:\t\t\t\t" . $email . "\n" .
	"About:\t\t\t\t" . $_POST['about'] . "\n" .
	"You identified as a:\t" . $_POST['what'] . "\n"
	;
	
	# CHECK PASSWORD
	# if the passwords are NOT blank...
	$pw_reset = "";
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	if (!empty($password1) && !empty($password2)) {
		# are they the same?
		if ($password1 == $password2) {		# case sensitive match, otherwise use strcmp() 
			$pw_reset = "\n" . "Password successfully reset" . "\n";
		}
		# note the same? let us know
		else {
			$pw_reset = "\n" . "Passwords did not match!" . "\n";
		}
	}
	# otherwise, do nothing (and reset line will be blank)
	
	# add information about password reset to the email 
	$body .= $pw_reset . "\n";
	
	# EMAIL NOTIFICATOINS
	# did you opt in to notifications?
	if ($_POST['notify'] == 'on') {			# on = checked
		$body .= "You have opted into periodic email notifications; settings can be changed at any time." . "\n";
	}
	# if not checked...
	else {
		$body .= "You have opted not to receive email notifications; settings can be changed at any time." . "\n";
	}

	# SEND EMAIL!
	# parameters are: to, subject, body, header details
	mail($email, $username . ": Profile Updated", $body, "From: mail@jeffreythompson.org");

?>

<!-- THEN, DISPLAY THE CONFIRMATION -->
<div id="wrapper">

<!-- show profile photo again -->
<div id="confirmPhoto">
<img src="images/profile.jpg" width="200" height="200" id="confirmPhoto">
</div>	<!-- end confirmPhoto -->

<!-- let us know everything was ok -->
<div>
<h1>Profile updated!</h1>

<!-- display the email address inline -->
<p>A copy of your profile has been emailed to you at 
	<?php echo $_POST['email']; ?>
</p>

<p style="margin-top:100px"><a href="#">&larr; Return to your profile</a></p>
</div>  <!-- end confirm text -->

<!-- reset to get height set properly -->
<p id="clear"></p>

</div>  <!-- end wrapper -->

</body>
</html>