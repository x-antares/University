<?php
//
//namespace university\core;
//
//
//
//class Db {
//
//    protected $pdo;
//    protected static $instance;
//
//    /**
//     *
//     *
//     * Create connect with Db
//     * @return object(pointer)
//     */
//    protected function __construct(){
//        $db = require ROOT . '/bootstrap.php';
//        $options = [
//            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
//            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
//        ];
//        $this->pdo = new \PDO(['dsn'], $conn['user'], $conn['pass'], $options);
//    }
//
//    /*
//    *
//    * Check if create connect with Db
//    * @return object
//    */
//    public static function instance(){
//        if(self::$instance === null){
//            self::$instance = new self;
//        }
//        return self::$instance;
//    }
//
//    /**
//     *
//     * Check execute sql request
//     * @return boolean
//     */
//    public function execute($sql){
//        $stmt = $this->pdo->prepare($sql);
//        return $stmt->execute();
//
//    }
//
//    /**
//     *
//     * Execute sql request and return
//     * @return array
//     */
//    public function query($sql){
//        $stmt = $this->pdo->prepare($sql);
//        $res = $stmt->execute();
//        if($res !== false){
//            return $stmt->fetchAll();
//        }
//        return [];
//    }
//}