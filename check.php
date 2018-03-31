<?php
	define('Db','newdb');
define('Db_user','root');
define('Db_host','localhost');
define('Db_password','');
mysql_connect(Db_host, Db_user, Db_password);
mysql_select_db(Db) or die();
$result=mysql_query("SHOW TABLES");
while ($row = mysql_fetch_array($result)) {
	echo $row[0]."<br>";
}
?>