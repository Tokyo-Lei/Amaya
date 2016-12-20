<?php
/**
 * Amaya PHP Framework
 * User: OnoNaoki
 * Date: 2016/12/18
 * Time: 12:18
 */

class HomeController extends ShareControllers
{

    public function index()
    {

        $db = Article::first();
        $loader = new Twig_Loader_Filesystem(VIEW_PATH);
        $twig = new Twig_Environment($loader, array('cache' => BASE_PATH.'/cache',));
        echo $twig->render('home.html', array('db' => $db));

    }

        public function demo()
    {

     Redis::set('key','缓存测试',1,'h');
     echo Redis::get('key');

    }

}