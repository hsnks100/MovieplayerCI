<?php
$error = shell_exec('git pull origin master');

$log_file = fopen("./gitlog.txt", "a");  
fwrite($log_file, $error."\r\n");  
fclose($log_file);  

echo($log_file);

?>
