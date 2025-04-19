<?php
class Database {
    public static $connection;

    public static function connect() {
        if (!self::$connection) {
            $config = require __DIR__ . '/../../config.php';
            $db = $config['db'];

            try {
                self::$connection = new PDO(
                    "mysql:host={$db['host']};dbname={$db['name']};charset=utf8",
                    $db['username'],
                    $db['password']
                );
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Kết nối DB lỗi: " . $e->getMessage());
            }
        }

        return self::$connection;
    }
}
