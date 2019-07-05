<?php

class MemcachedConnectionTest
{
	const HOST = "memcached-server";
	const PORT = "11211";
	const KEY = "VAL";
	const VALUE = 9999;

	private static $memcached;
	private static $result;

	public static function run()
	{
		self::$memcached = new Memcached();
		if(self::$memcached && self::$memcached->addServer(self::HOST, self::PORT))
		{
			self::$memcached->add(self::KEY, self::VALUE);

			self::$result = "Memcached Server Connection Test:\n";
			self::$result .= "Host: '".self::HOST."' Port: '".self::PORT."'\n";
			$connStatus = self::$memcached->get(self::KEY) === self::VALUE ? "OK" : "ERROR";
			self::$result .= "Connection ".$connStatus."!\n";

			self::$memcached->delete(self::KEY);
			self::$memcached->quit();
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
