<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form action="" method="post">
<input name="token_name" type="text" value="<?=(isset($_POST['token_name']) ? $_POST['token_name'] : '') ?>"/>
<input type="submit" value="generate" />
</form>
<?php
if (isset($_POST['token_name'])) {
	include '../../Confone.php';

	Confone::setAppKey('pri_wbzUYqF0Vs_1_13_6dcd6f5b');

	$tokenRule = new Confone_Security_Rule_Token('token');
	$token = $tokenRule->generateToken('token');

	echo '<a href="token-callback.php?token='.$token.'">good token</a><br>';
	echo '<a href="token-callback.php?token='.$token.'1">bad token</a>';
}
?>

</body>
</html>