<?php
/**
 * Amaya PHP Framework
 * User: OnoNaoki
 * Date: 2016/12/18
 * Time: 10:45
 */

use \NoahBuscher\Macaw\Macaw;


Macaw::get('/', function() {
    echo '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>Amaya </b>轻型框架！</p><br/>版本 V0.1</div>';
});

//加载控制器
//Macaw::get('', 'HomeController@Index');

Macaw::dispatch();