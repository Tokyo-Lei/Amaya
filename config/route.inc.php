<?php
/**
 * Amaya PHP Framework
 * User: OnoNaoki
 * Date: 2016/12/17
 * Time: 10:45
 */

use \NoahBuscher\Macaw\Macaw;

//Macaw::get('', function() {
//    echo '<h2>Hi~ Ononaoki框架！</h2>';
//});

Macaw::get('', 'HomeController@Index');

Macaw::dispatch();