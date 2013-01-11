<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!-- ADD A DYNAMIC USERNAME TO THE TITLE -->

<?php
	$username = "John Doe";
	echo "<title>Update Profile | " . $username . "</title>";
?>

<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">

<!-- USERNAME (auto-convert to all uppercase) -->
<?php
	echo "<h1>" . strtoupper($username) . "</h1>";
?>

<!-- FORM ITSELF! -->
<!-- action will run the PHP page we'll make in a minute, post means upload the info (by email, here) -->
<form id="updateProfile" action="confirmation.php" method="post">

<!-- PROFILE PHOTO (add later) -->
<p>
<label>Profile photo</label>
<img id="profilePhoto" src="images/profile.jpg" width="200" height="200">
</p>
<p>
<label>&nbsp;</label>	<!-- cheating? yes, but it gets the spacing right -->
<input type="file" name="upload" /><input type="submit" value="Upload" />
</p>

<!-- NAME -->
<p>
<label>Username</label>
<input type="text" name="username" size="46" maxlength="40" />
</p>

<!-- EMAIL -->
<p>
<label>Email</label>
<input type="text" name="email" size="46" maxlength="40" />
</p>

<!-- PASSWORD -->
<p>
<label>New password</label>
<input type="password" name="password1" />
</p><p>
<label>Retype password</label>
<input type="password" name="password2" />
</p>

<!-- ABOUT ME -->
<p>
<label>About me</label>
<textArea name="about" rows="6" cols="40" style="max-width:330px"></textArea>
</p>
<!-- text between tags will appear in the box-->

<!-- RADIO BUTTONS -->
<p>
<label>Identifier</label>
<input type="radio" name="what" value="man" /> Man
<input type="radio" name="what" value="woman" /> Woman
<input type="radio" name="what" value="horse" /> Horse
<input type="radio" name="what" value="tricerotops" /> Tricerotops
<input type="radio" name="what" value="worm" /> Worm
</p>

<!-- RECEIVE NOTIFICATIONS? -->
<p>
<label>Status updates?</label>
<input type="checkbox" name="notify" /> Yes! Notify me by email of status updates.
</p>

<!-- SUBMIT BUTTON -->
<!-- id sets style, type and name just make it happen, and value is the name on the button -->
<input id="submit" type="submit" name="submit" value="Submit" />

</form> <!-- end form -->

</div> <!-- end wrapper -->

</body>
</html>
