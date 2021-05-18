<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


include 'Calc.php';

$media = new Calc();
$media->setkm($_POST['km']);
$media->setlt($_POST['lt']);

$media->media();

if ($media) {
	header('Location: conta.php?media=' . $media);
}






