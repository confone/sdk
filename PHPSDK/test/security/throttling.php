<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
include '../../Confone.php';

Confone::setAppKey('pri_wbzUYqF0Vs_1_13_6dcd6f5b');
$securityServ = new Confone_Security('userthrottling');

$throttlingSubj = new Confone_Security_Subject_Throttling($_SERVER['REMOTE_ADDR']);

$securityServ->setRule('throttling', $throttlingSubj);

if ($securityServ->scan()) {
	echo 'allowed';
} else {
	echo 'throttled';
}
?>

</body>
</html>