<?PHP
date_default_timezone_set('Europe/Kiev');
$Data = date('l jS \of F Y H:i:s A');
$Ip = $_SERVER['REMOTE_ADDR'];
$Name = $_SERVER['HTTP_HOST'];
$Agent = $_SERVER['HTTP_USER_AGENT'];
$log = fopen("ip.txt","at");
fwrite($log,"����:$Data\nIP:$Ip\n���:$Name\n������:$Agent \n\n");
fclose($log);
?>