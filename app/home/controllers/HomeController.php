<?php
/**
 * Amaya PHP Framework
 * User: OnoNaoki
 * Date: 2016/12/17
 * Time: 10:39
 */

class HomeController extends ShareControllers
{

    public function index()
    {


//        require BASE_PATH.'/system/fcache.inc.php';
//
//        $cache = new FCache();
       //$db = Article::first();



//        $formdata = array();
//        $password = 'admin';
//        $formdata['factor'] = random_string('diy',5,'abcdefghigklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ0123456789');
//        $formdata = md5(md5($password).$formdata['factor']);
//
//        echo $formdata;

        $db = Article::first();

        $loader = new Twig_Loader_Filesystem(VIEW_PATH);
        $twig = new Twig_Environment($loader, array('cache' => BASE_PATH.'/cache',));
        echo $twig->render('home.html', array('db' => $db));
        //require VIEW_PATH.'home.php';

    }

}