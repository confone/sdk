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

$securityServ->addRule('throttling', $throttlingSubj);

if (!$securityServ->scan()) {
	sleep(2);
}

echo 'good';
?>

</body>
</html>