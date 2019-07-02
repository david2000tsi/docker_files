<?php

class DatabaseConnectionTest
{
	const DB_HOST = "mysql_db";
	const DB_USER = "root";
	const DB_PASSWORD = "mysql";
	const DB_NAME = "db_test";

	private static $conn;
	private static $result;

	public static function run()
	{
		try
		{
			self::$conn = new PDO("mysql:dbname=".self::DB_NAME.";host=".self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
			self::$result = "Connected to database ".self::DB_NAME." as ".self::DB_USER." user.";
		}
		catch (PDOException $e)
		{
			self::$result = "Connection failed: ".$e->getMessage();
		}
	}

	public static function showResult()
	{
		echo("<!doctype html>");
		echo("<html>");
		echo("<head>");
		echo("<meta charset=\"utf-8\">");
		echo("<title>Docker Test</title>");
		echo("</head>");
		echo("<body>");
		echo("<h2 align=\"center\">".self::$result."</h2>");
		echo("</body>");
		echo("</html>");
	}
}

DatabaseConnectionTest::run();
DatabaseConnectionTest::showResult();

phpinfo();

?>
