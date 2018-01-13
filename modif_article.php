<?php
header('Location: ./index.php');
session_start();
include('extract_db.php');
$array = extract_db('./articles.csv');
$fd = fopen("./articles.csv", w);
$modif = 0;
foreach ($array as $key => $value)
{
	if ($_POST['type'] == $array[$key]['type'] && $_POST['qte'] == 0)
	{
		unset($array[$key]);
	}
	elseif ($_POST['type'] == $array[$key]['type'] && $_POST['qte'] != 0)
	{
		$array[$key]['type'] = "type:".$array[$key]['type'];
		$_POST['prix'] != 0 ? $array[$key]['Prix'] = "Prix:".$_POST['prix'] : $array[$key]['Prix'] = "Prix:".$array[$key]['Prix'];
		$_POST['qte'] != 0 ? $array[$key]['qte'] = "qte:".$_POST['qte'] : $array[$key]['qte'] = "qte:".$array[$key]['qte'];
		$_POST['cat1'] != "" ? $array[$key]['cat1'] = "cat1:".$_POST['cat1'] : $array[$key]['cat1'] = "cat1:".$array[$key]['cat1'];
		$_POST['cat2'] != "" ? $array[$key]['cat2'] = "cat2:".$_POST['cat2'] : $array[$key]['cat2'] = "cat2:".$array[$key]['cat2'];
		$_POST['cat3'] != "" ? $array[$key]['cat3'] = "cat3:".$_POST['cat3'] : $array[$key]['cat3'] = "cat3:".$array[$key]['cat3'];
		$modif = 1;
	}
	else
	{
		$array[$key]['type'] = "type:".$array[$key]['type'];
		$array[$key]['Prix'] = "Prix:".$array[$key]['Prix'];
		$array[$key]['qte'] = "qte:".$array[$key]['qte'];
		$array[$key]['cat1'] = "cat1:".$array[$key]['cat1'];
		$array[$key]['cat2'] = "cat2:".$array[$key]['cat2'];
		$array[$key]['cat3'] = "cat3:".$array[$key]['cat3'];
	}	
	fputcsv($fd, $array[$key]);
}
if ($modif == 0 && $_POST['type'] != "" && $_POST['qte'] != 0)
{
	$key++;
	$array[$key]['type'] = "type:".$_POST['type'];
	$array[$key]['Prix'] = "Prix:".$_POST['prix'];
	$array[$key]['qte'] = "qte:".$_POST['qte'];
	$array[$key]['cat1'] = "cat1:".$_POST['cat1'];
	$array[$key]['cat2'] = "cat2:".$_POST['cat2'];
	$array[$key]['cat3'] = "cat3:".$_POST['cat3'];
	fputcsv($fd, $array[$key]);
}
?>