<?php
/**
 * Amaya PHP Framework
 * User: OnoNaoki
 * Date: 2016/12/17
 * Time: 13:15
 */


$loader = new Twig_Loader_Filesystem(VIEW_PATH);
$twig = new Twig_Environment($loader, array(
    'cache' => BASE_PATH.'/cache',
));