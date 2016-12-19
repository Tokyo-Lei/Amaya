<?php
/**
 * 贡献  Sanming.member
 * https://segmentfault.com/u/var/about
 */
require_once('Arr.php');

class Amaya{

   static $cached;
    
    public static function load($file)
    {
        if (!isset(static::$cached[$file]))
           static::$cached[$file] = @require('../config/'.$file.'.inc.php');
    }
    
    public static function get($keys, $default_value = NULL)
    {
        list($file, $key) = explode('.', $keys, 2);
        static::load($file);

        return !empty($key) ? Arr::get(static::$cached[$file], $key, $default_value) : static::$cached[$file];
    }
    
    public static function set($key, $value)
    {
        list($file, $key) = explode('.', $keys, 2);
        if (empty($key)) return false;
        static::load($file);
        return Arr::set(static::$cached[$file], $key, $value);
    }

}

