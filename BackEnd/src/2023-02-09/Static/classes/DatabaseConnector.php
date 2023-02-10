<?php

// https://en.wikipedia.org/wiki/Singleton_pattern
// https://refactoring.guru/design-patterns/singleton
class DatabaseConnector {

	private static $instance = null;

	function __construct(
		string $hostname,
		string $username,
		string $password
	)
	{
		printf("========%s========\n", __CLASS__);

		var_dump($hostname, $username, $password);
	}

	public static function connect(
		string $hostname,
		string $username,
		string $password
	): void
	{
		self::getInstance($hostname, $username, $password);
	}

	public static function getInstance(
		?string $hostname = null,
		?string $username = null,
		?string $password = null
	): DatabaseConnector
	{
		if (!self::$instance) {
			self::$instance = new DatabaseConnector($hostname, $username, $password);
		}

		return self::$instance;
	}
}