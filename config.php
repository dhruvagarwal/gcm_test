<?php
/**
 * Database config variables
 */
 
 $services_json = json_decode(getenv("VCAP_SERVICES"),true);
		$mysql_config = $services_json["mysql-5.1"][0]["credentials"];
		$username = $mysql_config["username"];
		$password = $mysql_config["password"];
		$hostname = $mysql_config["hostname"];
		$port = $mysql_config["port"];
		$db = $mysql_config["name"];
		define("GOOGLE_API_KEY", "'AIzaSyD84cP98ZahmlYLin26w2lNLfiKFDBtj1g'");
 
define("DB_HOST", $hostname);
define("DB_USER", $username);
define("DB_PASSWORD", $password);
define("DB_DATABASE", $db);

/*
 * Google API Key
 */

?>
