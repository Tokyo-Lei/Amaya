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

        require BASE_PATH.'/config/data.inc.php';

        $db = $data->select("admin", [
            "id",
            "user_name"
        ]);


        return $db;

    }
}