<?php
namespace App\Core;

use PDO;
use PDOException;
class Database extends PDO
{
        private $connect;
        private static $instance;
        private const password = '';
        private const user = 'root';

       public function  __construct ()
        {
                $dsn = 'mysql:host=127.0.0.1;dbname=biblio2';
                try 
                {
                        $this->connect=new PDO($dsn,self::user,self::password);
                        parent::__construct($dsn, self::user, self::password);
                        $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                catch(PDOException $e)
                {
                        die($e->getMessage());
                }
        }
        public static function getInstance()
        {
                if(self::$instance === null)
                {
                        self::$instance = new Database();    
                }
                return self::$instance;
        }
}






?>