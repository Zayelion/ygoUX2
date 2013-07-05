<?php

$FILENAME = '_stats_cache.txt';
$SERVERURL = 'http://74.91.18.162:7922/stats';
$DELAY = 15;
$TIMEOUT = 3;

function print_values($values)
{
	$stats = explode(' ', $values);
	if ($stats[0] == -1)
		echo 'Server down';
	else
		echo 'Rooms: ' . $stats[0] . ' Players: ' . $stats[1];
}

if (file_exists($FILENAME))
{
	$handle = fopen($FILENAME, 'r');
	$contents = fread($handle, filesize($FILENAME));
	$data = explode("\n", $contents);
	fclose($handle);
	
	$time = $data[0];
	$value = $data[1];
	
	if ($time + $DELAY > time())
	{
		print_values($value);
		exit();
	}
}

$ctx = stream_context_create(array('http'=>
    array(
        'timeout' => $TIMEOUT
    )
));

$result = @file_get_contents($SERVERURL, false, $ctx);

if ($result === FALSE)
{
	$result = '-1 -1';
}

$handle = fopen($FILENAME, 'w');
fwrite($handle, time() . "\n" . $result);
fclose($handle);

print_values($result);