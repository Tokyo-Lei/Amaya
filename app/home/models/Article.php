<?php
/**
 * Amaya PHP Framework
 * User: OnoNaoki
 * Date: 2016/12/17
 * Time: 10:41
 */


class Article
{
    public static function first()
    {

        $database = new medoo(Amaya::get('data.'));

        $db = $database->select("admin", [
            "id",
            "user_name"
        ]);


        return $db;

    }
}