<?php

namespace Src;

use Exception;
use InvalidArgumentException;
use PDOException;
use Src\Patterns\Singleton;

/**
 * Super simple database that tests for a connection and executes raw queries
 */
class KlankPDO extends Singleton
{
    private \PDO $pdo;

    public static function connect($dsn, $user, $pw)
    {
        if (in_array(null, func_get_args(), true)) {
            throw new InvalidArgumentException('All connection parameters must be provided.');
        }

        try {
            $instance = self::getInstance();
            $instance->pdo = new \PDO($dsn, $user, $pw);
            return self::connection();
        } catch (PDOException $e) {
            // TODO: Replace with a Logger
            echo "Connection failed: " . $e->getMessage() . "\n";
            return self::connection();
        }
    }

    // Executes a query to the database
    // TODO: Add functionality to do prepared queries instead...
    //public static function query(string $sql, array $values) {
    public static function query($sql) {
        $instance = self::getInstance();

        if(!$instance->connection()) {
            throw new Exception('You are not connected to the database.');
        }

        if(empty($sql)) {
            throw new Exception('Expected SQL Query. Instead Received null.');
        }
        
        try {
            // TODO: Write the prepare and execute.
            $stmt = $instance->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // TODO: Handle Exception.
        }
    }

    // Check if the connection is set.
    public static function connection() {
        $instance = self::getInstance();
        return isset($instance->pdo);
    }
}
