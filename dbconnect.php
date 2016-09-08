<?php
$bd_host='localhost';
$db_user='root';
$db_pwd='';
$db_database='whatsapp';
@mysql_connect($db_host, $db_user, $db_pwd) or die('couldnt connect to MySql');
@mysql_select_db($db_database) or die('couldnt connect to data base');

?>