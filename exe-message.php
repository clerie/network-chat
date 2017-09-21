<?php
//$message = file_get_contents('php://input');

$message = $_POST["text"];
$benutzername = $_POST["benutzername"];

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

if(!empty($message)) {
	$file = "data/messages.txt";

	$myfile = fopen($file, "r") or die("Unable to read file!");
	$text = fread($myfile, filesize($file));
	fclose($myfile);

	if(empty($benutzername)) {
		$benutzername = getUserIP();
	}

	$myfile = fopen($file, "w") or die("Unable to write file!");
	fwrite($myfile, "[" . date("Y-m-d H:i:s") . "] " . $benutzername . ": " . $message . "\n" . $text);
	fclose($myfile);
}
?> 
