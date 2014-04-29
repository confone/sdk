<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
include '../Confone.php';

Confone::setAppKey('pri_Q1gAlRJDKf_1_54_fd89ec35d4');
$contentServ = new Confone_Content('homepage');
$texts = $contentServ->getGroupTexts('zh');

foreach ($texts as $key=>$text) { ?>
<label><?=$text ?></label><?=$key ?><br>
<?php }
$contentServ = new Confone_Content('homepage');
$texts = $contentServ->getGroupPreviewTexts('zh');

foreach ($texts as $key=>$text) { ?>
<label><?=$text ?></label><?=$key ?><br>
<?php } ?>
</body>
</html>