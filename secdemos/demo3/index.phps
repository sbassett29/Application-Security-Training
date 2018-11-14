<?php

const TOKEN = 'Hr3xDVfC';

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	$goodToken = false;
	if( isset( $_POST['token'] ) && TOKEN == $_POST['token'] ) {
		$goodToken = true;
	}
	echo $goodToken ? "Hooray, you sent along the right token!" : "Sorry, no good.";
}

?>

<html style="width:600px">

<form method="post" action="<?php echo htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES); ?>">

<h1>Please submit your secure token:</h1>
<input type="text" size="30" name="token" value="" />
<input type="submit" name="submit" value="Submit" />

</form>

</html>
