<?php
header('Location: ./index.php');
session_start();
include('extract_db.php');
$array = extract_db("./articles.csv");
if ($array[$_POST['type']])
	unset($array[$_POST['type']]);
for ($i = 0; $i < count($array); $i++)
{
	if ($array[$i]['type'] == $_POST['type'])
	{
		unset($array[$i]);
		$array = array_values($array);
	}
}
$fd = fopen("./articles.csv", w);
foreach ($array as $key => $value)
{
		$array[$key]['type'] = "type:".$array[$key]['type'];
		$array[$key]['Prix'] = "Prix:".$array[$key]['Prix'];
		$array[$key]['qte'] = "qte:".$array[$key]['qte'];
		$array[$key]['cat1'] = "cat1:".$array[$key]['cat1'];
		$array[$key]['cat2'] = "cat2:".$array[$key]['cat2'];
		$array[$key]['cat3'] = "cat3:".$array[$key]['cat3'];
		fputcsv($fd, $array[$key]);
}
?>