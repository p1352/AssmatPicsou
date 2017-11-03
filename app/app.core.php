<?php

class App {

    const SQL_NAME = "digitalsdzsylvan";
    const SQL_HOST = "digitalsdzsylvan.mysql.db";

    private static $_db_sql = null;

    public static function openSql(){
        if(!self::$_db_sql){
            self::$_db_sql = new Sql(self::SQL_HOST, self::SQL_NAME);
        }
        return self::$_db_sql;
    }
}

?> 