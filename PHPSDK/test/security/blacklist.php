<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
include '../../Confone.php';

Confone::setAppKey('pri_wbzUYqF0Vs_1_13_6dcd6f5b');
$securityServ = new Confone_Security('blacklist');

$blacklistSubj = new Confone_Security_Subject_Blacklist('192.168.0.100');

$securityServ->setRule('list', $blacklistSubj);

echo '192.168.0.100 => ';
if ($securityServ->scan()) {
	echo 'allowed';
} else {
	echo 'blocked';
}

echo '<br>';

$blacklistSubj = new Confone_Security_Subject_Blacklist('192.168.0.101');

$securityServ->setRule('list', $blacklistSubj);

echo '192.168.0.101 => ';
if ($securityServ->scan()) {
	echo 'allowed';
} else {
	echo 'blocked';
}
?>

</body>
</html>