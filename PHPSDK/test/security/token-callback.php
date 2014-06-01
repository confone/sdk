<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
$token = $_GET['token'];

if (empty($token)) {
	header('Location: token.php');
}

include '../../Confone.php';

Confone::setAppKey('pri_wbzUYqF0Vs_1_13_6dcd6f5b');
$securityServ = new Confone_Security('token');

$tokenSubj = new Confone_Security_Subject_Token($token);

$securityServ->setRule('token', $tokenSubj);

if ($securityServ->scan()) {
	echo 'good link';
} else {
	echo 'bad link';
}
?>

</body>
</html>