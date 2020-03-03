<?php
class Database{
    public static $host;
    public static $dbName;
    public static $userName;
    public static $password;
    private static function connect(){
        $pdo = new PDO(`mysql:host={self::host};
                        dbname={self::dbName};
                        charset=utf8`,
                        self::$userName,
                        self::$password
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    public static function query($query, $params = array()){
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if(explode(' ',$query)[0] == 'SELECT'){
            $data = $statement->fetchAll();
            return $data;
        }
    }

}
?>      