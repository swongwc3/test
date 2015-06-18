<?php

class DB {

    public static function connection() {
        global $dbconn;
        if (is_object($dbconn))
            return $dbconn;
        $dbname = 'my_db';
        $dbuser = 'root';
        $dbpass = '';
        $dbhost = 'localhost';
        return $dbconn = new \mysqli($dbhost, $dbuser, $dbpass, $dbname);
    }

    public static function cleanse($string) {
        return mysqli_real_escape_string(self::connection(),$string);
    }

    /**
     * Execute SQL against the database and return associative array
     * 
     * @param string $sql
     * @return array|null
     */
    public static function sql($sql) {
        $result = self::connection()->query($sql);
        if (!is_bool($result)) {
            $out = mysqli_fetch_all($result, MYSQL_ASSOC);
            return $out;
        }
        return null;
    }

    /** 
     * Execute SQL against database and return insert id
     * 
     * @param string $sql SQL Query
     * @return int
     */
    public static function insert($sql) {
        self::connection()->query($sql);
        return mysqli_insert_id(self::connection());
    }



    public static function iid()
    {
        return mysqli_insert_id(self::connection());
    }
}