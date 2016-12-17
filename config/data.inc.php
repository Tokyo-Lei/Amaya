<?php
/**
 * Amaya PHP Framework
 * User: OnoNaoki
 * Date: 2016/12/17
 * Time: 9:34
 */

$data = new medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => 'amaya',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // [optional]
    'port' => 3306,

    // [optional] Table prefix
    'prefix' => 'amaya_',

]);