<?php
function extract_db($path)
{
	$fd = fopen("./articles.csv", r);
	$i  = 0;
	while  ($tab = fgetcsv($fd))
	{
		$array[$i] = $tab;
		$j = 0;
		foreach ($array[$i] as $key => $value)
		{
			preg_match("/(^.*?):/", $value, $matches);
			preg_match("/.*:(.*)/", $value, $matches_2);
			$array[$i][$matches[1]] = $matches_2[1];
			unset($array[$i][$j]);
			$j++;
	
		}
	
		$i++;
	}
	return ($array);
}
?>