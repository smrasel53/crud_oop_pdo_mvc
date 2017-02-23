<?php 
	include_once '/../config/config.php';
	class DB
	{
		public static $pdo;

		public static function connection()
		{
			if (!isset(self::$pdo)) {
				try {
					self::$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
				} catch(PDOException $e) {
					echo "Connection fail".$e->getMessage();
				}
			}
			return self::$pdo;
		}

		public static function prepare($query) {
			return self::connection()->prepare($query);
		}
	}
 ?>