<?php
include '../Confone.php';

Confone::setAppKey('pri_Q1gAlRJDKf_1_54_fd89ec35d4');
$contentServ = new Confone_Content('homepage');
$images = $contentServ->getGroupImages();

foreach ($images as $key=>$image) { ?>
<img src="<?=$image ?>" /><?=$key ?><br>
<?php }
$contentServ = new Confone_Content('homepage');
$images = $contentServ->getGroupPreviewImages();

foreach ($images as $key=>$image) { ?>
<img src="<?=$image ?>" /><?=$key ?><br>
<?php } ?>