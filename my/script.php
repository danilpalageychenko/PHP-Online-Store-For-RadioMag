<?PHP
date_default_timezone_set('Europe/Kiev');
$Data = date('l jS \of F Y H:i:s A');
$Ip = $_SERVER['REMOTE_ADDR'];
$Name = $_SERVER['HTTP_HOST'];
$Agent = $_SERVER['HTTP_USER_AGENT'];
$log = fopen("ip.txt","at");
fwrite($log,"ДАТА:$Data\nIP:$Ip\nИмя:$Name\nДанные:$Agent \n\n");
fclose($log);
?>