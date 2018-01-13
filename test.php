#!/usr/bin/php
<?php
// $str = file_get_contents("./articles.csv");

$fd = fopen("./articles.csv", r);
$i  = 0;
while  ($tab = fgetcsv($fd))
{
	$array[$i] = $tab;
	$j = 0;
	foreach ($array[$i] as $key => $value)
	{
		preg_match("/(^.*?):/", $value, $matches);
		// echo $matches[1]."\n";
		$array[$i][$matches[1]] = $value;
		unset($array[$i][$j]);
		$j++;

	}

	$i++;
}
print_r($array);
?>