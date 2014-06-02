<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
$lat = '49.283945';
$lng = '-123.120086';

echo 'Reference [lat, lng] - ['.$lat.','.$lng.']<br>';

include '../../Confone.php';

Confone::setAppKey('pri_wbzUYqF0Vs_1_13_6dcd6f5b');
$securityServ = new Confone_Security('geodetic');

$geoSubj = new Confone_Security_Subject_Geodetic('12345');

if (isset($_POST['lat']) && isset($_POST['lng'])) {
	echo 'Current [lat, lng] - ['.$_POST['lat'].','.$_POST['lng'].']<br>';
	$geoSubj->setLatitude($_POST['lat']);
	$geoSubj->setLongitude($_POST['lng']);

	$securityServ->setRule('geo_scan', $geoSubj);	

	if ($securityServ->scan()) {
		echo 'same geo range';
	} else {
		echo json_encode($securityServ->getFailedRules());
	}
} else {
	$geoSubj->setLatitude($lat);
	$geoSubj->setLongitude($lng);

	$securityServ->setRule('geo_scan', $geoSubj);
	$securityServ->scan();
}
?>
<form action="" method="post">
<input type="text" name="lat" value="<?=(isset($_POST['lat']) ? $_POST['lat'] : $lat) ?>" />
<input type="text" name="lng" value="<?=(isset($_POST['lng']) ? $_POST['lng'] : $lng) ?>" />
<input type="submit" value="validate">
</form>
</body>
</html>