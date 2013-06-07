<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-11 01:52:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Carm' not found ~ APPPATH\classes\Model\catalog.php [ 7 ] in :
2013-05-11 01:52:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 01:54:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\Model\catalog.php [ 10 ] in :
2013-05-11 01:54:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 01:59:49 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\Model\catalog.php [ 10 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:10
2013-05-11 01:59:49 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_all_cars()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:10
2013-05-11 02:03:31 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\catalog.php [ 9 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:9
2013-05-11 02:03:31 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:9
2013-05-11 02:05:41 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\catalog.php [ 9 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:9
2013-05-11 02:05:41 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:9
2013-05-11 02:06:57 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: dataCars ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:9
2013-05-11 02:06:57 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Kohana_View->__get('dataCars')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:9
2013-05-11 02:07:19 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: dataCars ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:9
2013-05-11 02:07:19 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Kohana_View->__get('dataCars')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:9
2013-05-11 02:07:31 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: dataCars ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:9
2013-05-11 02:07:31 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Kohana_View->__get('dataCars')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:9
2013-05-11 02:07:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataCars ~ APPPATH\views\catalog\cars.php [ 7 ] in Z:\home\kohana\www\application\views\catalog\cars.php:7
2013-05-11 02:07:43 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\cars.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 7, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\cars.php:7
2013-05-11 02:09:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\views\catalog\cars.php [ 10 ] in Z:\home\kohana\www\application\views\catalog\cars.php:10
2013-05-11 02:09:10 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\cars.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\cars.php:10
2013-05-11 02:12:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\catalog\cars.php [ 13 ] in :
2013-05-11 02:12:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 02:12:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\catalog\cars.php [ 13 ] in :
2013-05-11 02:12:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 02:16:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\catalog\cars.php [ 17 ] in :
2013-05-11 02:16:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 02:45:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\Model\catalog.php [ 15 ] in :
2013-05-11 02:45:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 02:45:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\Model\catalog.php [ 15 ] in :
2013-05-11 02:45:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 02:48:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: names ~ APPPATH\views\catalog\cars.php [ 2 ] in Z:\home\kohana\www\application\views\catalog\cars.php:2
2013-05-11 02:48:29 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\cars.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\cars.php:2
2013-05-11 02:55:19 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: name ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:10
2013-05-11 02:55:19 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(10): Kohana_View->__get('name')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:10
2013-05-11 02:55:35 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: name ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:10
2013-05-11 02:55:35 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(10): Kohana_View->__get('name')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:10
2013-05-11 02:58:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\catalog.php [ 7 ] in :
2013-05-11 02:58:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 02:58:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\catalog.php [ 7 ] in :
2013-05-11 02:58:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 02:58:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\catalog.php [ 7 ] in :
2013-05-11 02:58:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 02:58:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\catalog.php [ 7 ] in :
2013-05-11 02:58:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 02:58:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\catalog.php [ 7 ] in :
2013-05-11 02:58:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 02:58:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `carm`.`id` AS `id`, `carm`.`model` AS `model`, `carm`.`name` AS `name` FROM `cars` AS `carm` WHERE 0 = 'model' AND `1` = 'LADA' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 02:58:35 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `carm`.`...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 Z:\home\kohana\www\application\classes\Model\catalog.php(7): Kohana_ORM::factory('carm', Array)
#6 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_all_cars('LADA')
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 02:59:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataCarName ~ APPPATH\classes\Model\catalog.php [ 14 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:14
2013-05-11 02:59:07 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 14, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_all_cars('LADA')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:14
2013-05-11 02:59:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataCarName ~ APPPATH\classes\Model\catalog.php [ 16 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:16
2013-05-11 02:59:21 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_all_cars('LADA')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:16
2013-05-11 02:59:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataCarName ~ APPPATH\classes\Model\catalog.php [ 16 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:16
2013-05-11 02:59:41 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_all_cars('LADA')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:16
2013-05-11 03:00:08 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 988 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:7
2013-05-11 03:00:08 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(7): Kohana_ORM->find_all()
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_all_cars('LADA')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:7
2013-05-11 03:01:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataCarName ~ APPPATH\classes\Model\catalog.php [ 16 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:16
2013-05-11 03:01:11 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_all_cars()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:16
2013-05-11 03:01:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataCarName ~ APPPATH\classes\Model\catalog.php [ 16 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:16
2013-05-11 03:01:49 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_all_cars()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:16
2013-05-11 03:07:49 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database.php [ 508 ] in :
2013-05-11 03:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:09:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Model\catalog.php [ 8 ] in :
2013-05-11 04:09:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:09:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Catalog::select_all_cars() ~ APPPATH\classes\Controller\catalog.php [ 9 ] in :
2013-05-11 04:09:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:09:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Catalog::select_all_cars() ~ APPPATH\classes\Controller\catalog.php [ 9 ] in :
2013-05-11 04:09:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:09:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Catalog::select_all_cars() ~ APPPATH\classes\Controller\catalog.php [ 9 ] in :
2013-05-11 04:09:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:10:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function print_f() ~ APPPATH\views\catalog\cars.php [ 2 ] in :
2013-05-11 04:10:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:10:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Catalog::select_all_cars() ~ APPPATH\classes\Controller\catalog.php [ 9 ] in :
2013-05-11 04:10:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:11:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_AS ~ APPPATH\classes\Model\catalog.php [ 10 ] in :
2013-05-11 04:11:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:12:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataName ~ APPPATH\classes\Model\catalog.php [ 12 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:12
2013-05-11 04:12:25 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 12, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_LADA()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:12
2013-05-11 04:13:12 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Model\catalog.php [ 9 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:9
2013-05-11 04:13:12 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(9): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_LADA()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:9
2013-05-11 04:13:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function print_f() ~ APPPATH\views\catalog\cars.php [ 2 ] in :
2013-05-11 04:13:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:14:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\catalog\cars.php [ 4 ] in Z:\home\kohana\www\application\views\catalog\cars.php:4
2013-05-11 04:14:15 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\cars.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 4, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\cars.php:4
2013-05-11 04:15:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataName ~ APPPATH\classes\Model\catalog.php [ 13 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:13
2013-05-11 04:15:35 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 13, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_LADA()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:13
2013-05-11 04:16:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataName ~ APPPATH\classes\Model\catalog.php [ 13 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:13
2013-05-11 04:16:18 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 13, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(9): Model_Catalog->select_LADA()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:13
2013-05-11 04:25:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function print_f() ~ APPPATH\views\catalog\cars.php [ 2 ] in :
2013-05-11 04:25:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:26:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function print_f() ~ APPPATH\views\catalog\cars.php [ 2 ] in :
2013-05-11 04:26:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:26:45 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\catalog\cars.php [ 4 ] in Z:\home\kohana\www\application\views\catalog\cars.php:4
2013-05-11 04:26:45 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\cars.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 4, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\cars.php:4
2013-05-11 04:26:54 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: data_lada_model ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:12
2013-05-11 04:26:54 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(12): Kohana_View->__get('data_lada_model')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:12
2013-05-11 04:27:06 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: data_lada_model ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:12
2013-05-11 04:27:06 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(12): Kohana_View->__get('data_lada_model')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:12
2013-05-11 04:27:46 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: LADA ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:14
2013-05-11 04:27:46 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(14): Kohana_View->__get('LADA')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:14
2013-05-11 04:29:36 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: data ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:11
2013-05-11 04:29:36 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(11): Kohana_View->__get('data')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:11
2013-05-11 04:30:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\catalog.php [ 11 ] in :
2013-05-11 04:30:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:30:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\catalog.php [ 11 ] in :
2013-05-11 04:30:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:30:44 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: data ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:10
2013-05-11 04:30:44 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(10): Kohana_View->__get('data')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:10
2013-05-11 04:30:52 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\catalog\cars.php [ 4 ] in Z:\home\kohana\www\application\views\catalog\cars.php:4
2013-05-11 04:30:52 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\cars.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 4, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\cars.php:4
2013-05-11 04:35:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataName ~ APPPATH\classes\Model\catalog.php [ 23 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:23
2013-05-11 04:35:23 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(12): Model_Catalog->select_Ms()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:23
2013-05-11 04:36:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataName ~ APPPATH\classes\Model\catalog.php [ 23 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:23
2013-05-11 04:36:35 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(12): Model_Catalog->select_Ms()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:23
2013-05-11 04:36:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataNameM ~ APPPATH\classes\Model\catalog.php [ 23 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:23
2013-05-11 04:36:43 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(12): Model_Catalog->select_Ms()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_cars()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:23
2013-05-11 04:39:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Carm::name() ~ APPPATH\classes\Model\catalog.php [ 23 ] in :
2013-05-11 04:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 04:39:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Carm::name() ~ APPPATH\classes\Model\catalog.php [ 23 ] in :
2013-05-11 04:39:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 05:40:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\catalog.php [ 18 ] in :
2013-05-11 05:40:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 05:40:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\catalog.php [ 26 ] in :
2013-05-11 05:40:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 06:59:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_catergorym' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-05-11 06:59:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 07:00:06 --- CRITICAL: Database_Exception [ 1146 ]: Table 'uazbd.catergory' doesn't exist [ SHOW FULL COLUMNS FROM `catergory` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-11 07:00:06 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('catergory')
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\kohana\www\application\classes\Model\catalog.php(28): Kohana_ORM::factory('catergorym')
#7 Z:\home\kohana\www\application\classes\Controller\catalog.php(28): Model_Catalog->select_category()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:358
2013-05-11 07:01:28 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\catalog\category.php [ 3 ] in Z:\home\kohana\www\application\views\catalog\category.php:3
2013-05-11 07:01:28 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\category.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\category.php:3
2013-05-11 07:02:13 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: dataC ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:30
2013-05-11 07:02:13 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(30): Kohana_View->__get('dataC')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:30
2013-05-11 07:08:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function find_all() ~ APPPATH\classes\Model\catalog.php [ 38 ] in :
2013-05-11 07:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 07:08:31 --- CRITICAL: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `podcategorym`.`id` AS `id`, `podcategorym`.`id_category` AS `id_category`, `podcategorym`.`name` AS `name` FROM `podcategory` AS `podcategorym` WHERE `id_category` = (3, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 07:08:31 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `podcate...', 'Model_Podcatego...', Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\kohana\www\application\classes\Model\catalog.php(38): Kohana_ORM->find_all()
#4 Z:\home\kohana\www\application\classes\Controller\catalog.php(31): Model_Catalog->select_podcategory(Array)
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 07:09:09 --- CRITICAL: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `podcategorym`.`id` AS `id`, `podcategorym`.`id_category` AS `id_category`, `podcategorym`.`name` AS `name` FROM `podcategory` AS `podcategorym` WHERE `id_category` = (3, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 07:09:09 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `podcate...', 'Model_Podcatego...', Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\kohana\www\application\classes\Model\catalog.php(38): Kohana_ORM->find_all()
#4 Z:\home\kohana\www\application\classes\Controller\catalog.php(31): Model_Catalog->select_podcategory(Array)
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 07:09:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: rowpc ~ APPPATH\views\catalog\category.php [ 7 ] in Z:\home\kohana\www\application\views\catalog\category.php:7
2013-05-11 07:09:35 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\category.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 7, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\category.php:7
2013-05-11 07:17:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Model\catalog.php [ 42 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:42
2013-05-11 07:17:43 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 42, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(32): Model_Catalog->select_podcategory()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:42
2013-05-11 07:22:16 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: dataPC ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:33
2013-05-11 07:22:16 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(33): Kohana_View->__get('dataPC')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:33
2013-05-11 07:22:34 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: dataPC ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:33
2013-05-11 07:22:34 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(33): Kohana_View->__get('dataPC')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:33
2013-05-11 07:22:37 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: dataPC ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:33
2013-05-11 07:22:37 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(33): Kohana_View->__get('dataPC')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:33
2013-05-11 07:22:48 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: dataPC ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:33
2013-05-11 07:22:48 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(33): Kohana_View->__get('dataPC')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:33
2013-05-11 08:37:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Model\catalog.php [ 42 ] in Z:\home\kohana\www\application\classes\Model\catalog.php:42
2013-05-11 08:37:51 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\catalog.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 42, Array)
#1 Z:\home\kohana\www\application\classes\Controller\catalog.php(29): Model_Catalog->select_podcategory()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\catalog.php:42
2013-05-11 08:41:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_LOGICAL_AND, expecting ')' ~ APPPATH\views\catalog\category.php [ 3 ] in :
2013-05-11 08:41:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 08:41:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataPC ~ APPPATH\views\catalog\category.php [ 13 ] in Z:\home\kohana\www\application\views\catalog\category.php:13
2013-05-11 08:41:58 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\category.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 13, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\category.php:13
2013-05-11 08:42:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\catalog\category.php [ 8 ] in :
2013-05-11 08:42:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 12:14:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function select_category() ~ APPPATH\classes\Controller\catalog.php [ 28 ] in :
2013-05-11 12:14:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 12:15:08 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-11 12:15:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\kohana\...', 33, Array)
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #112, 'name')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('name')
#3 Z:\home\kohana\www\application\views\catalog\category.php(5): Kohana_Database_Result->offsetGet('name')
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#8 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#9 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#10 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#14 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-05-11 12:15:09 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-11 12:15:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\kohana\...', 33, Array)
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #112, 'name')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('name')
#3 Z:\home\kohana\www\application\views\catalog\category.php(5): Kohana_Database_Result->offsetGet('name')
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#8 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#9 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#10 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#14 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-05-11 12:15:50 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-11 12:15:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\kohana\...', 33, Array)
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #112, 'name')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('name')
#3 Z:\home\kohana\www\application\views\catalog\category.php(5): Kohana_Database_Result->offsetGet('name')
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#8 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#9 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#10 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#14 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-05-11 12:16:04 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-11 12:16:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\kohana\...', 33, Array)
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #112, 'name')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('name')
#3 Z:\home\kohana\www\application\views\catalog\category.php(5): Kohana_Database_Result->offsetGet('name')
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#8 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#9 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#10 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#14 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-05-11 12:16:05 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-11 12:16:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\kohana\...', 33, Array)
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #112, 'name')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('name')
#3 Z:\home\kohana\www\application\views\catalog\category.php(5): Kohana_Database_Result->offsetGet('name')
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#8 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#9 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#10 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#14 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-05-11 12:17:59 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\catalog\category.php [ 6 ] in Z:\home\kohana\www\application\views\catalog\category.php:6
2013-05-11 12:17:59 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\category.php(6): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 6, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\category.php:6
2013-05-11 12:25:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: NAME_POD ~ APPPATH\views\catalog\category.php [ 9 ] in Z:\home\kohana\www\application\views\catalog\category.php:9
2013-05-11 12:25:03 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\category.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\category.php:9
2013-05-11 12:33:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\catalog.php [ 40 ] in :
2013-05-11 12:33:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 12:34:04 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-11 12:34:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\kohana\...', 33, Array)
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #98, 'id')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\kohana\www\application\classes\Controller\catalog.php(40): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-05-11 12:35:07 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-11 12:35:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\kohana\...', 33, Array)
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #98, 'id')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\kohana\www\application\classes\Controller\catalog.php(40): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-05-11 12:36:28 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-05-11 12:36:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\kohana\...', 33, Array)
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #98, 'id')
#2 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\kohana\www\application\classes\Controller\catalog.php(38): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-05-11 12:37:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\catalog.php [ 40 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:40
2013-05-11 12:37:36 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 40, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_category()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:40
2013-05-11 14:42:53 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '='' and where `options` ='2101'' at line 1 [ SELECT * FROM productwhere `id_pod_category`='' and where `options` ='2101' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 14:42:53 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM p...', false, Array)
#1 Z:\home\kohana\www\application\classes\Model\catalog.php(38): Kohana_Database_Query->execute()
#2 Z:\home\kohana\www\application\classes\Controller\catalog.php(62): Model_Catalog->get_all_where('product', NULL, '2101')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 14:43:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\Model\catalog.php [ 36 ] in :
2013-05-11 14:43:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 14:56:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\Model\catalog.php [ 36 ] in :
2013-05-11 14:56:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 14:56:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\Model\catalog.php [ 36 ] in :
2013-05-11 14:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 14:56:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\Model\catalog.php [ 36 ] in :
2013-05-11 14:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 14:56:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\Model\catalog.php [ 36 ] in :
2013-05-11 14:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 14:56:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\Model\catalog.php [ 36 ] in :
2013-05-11 14:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 14:56:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\Model\catalog.php [ 36 ] in :
2013-05-11 14:56:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 14:56:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\Model\catalog.php [ 36 ] in :
2013-05-11 14:56:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 14:56:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\Model\catalog.php [ 36 ] in :
2013-05-11 14:56:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 14:56:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\Model\catalog.php [ 36 ] in :
2013-05-11 14:56:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 16:05:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\catalog.php [ 38 ] in :
2013-05-11 16:05:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 16:07:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\classes\Model\catalog.php [ 47 ] in :
2013-05-11 16:07:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 16:07:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\classes\Model\catalog.php [ 47 ] in :
2013-05-11 16:07:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 16:08:16 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where `options` LIKE '%2101%'' at line 1 [ SELECT * FROM product where `id_pod_category`='4' and where `options` LIKE '%2101%' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 16:08:16 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM p...', false, Array)
#1 Z:\home\kohana\www\application\classes\Model\catalog.php(41): Kohana_Database_Query->execute()
#2 Z:\home\kohana\www\application\classes\Controller\catalog.php(62): Model_Catalog->get_all_where('product', '4', '2101')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 16:10:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\classes\Model\catalog.php [ 37 ] in :
2013-05-11 16:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 16:10:48 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\'%2103%\' and `id_pod_category` = \'1\' ORDER BY `product`.`id_pod_category`' at line 1 [ SELECT * FROM `product` WHERE `options` LIKE \'%2103%\' and `id_pod_category` = \'1\' ORDER BY `product`.`id_pod_category` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 16:10:48 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\kohana\www\application\classes\Model\catalog.php(41): Kohana_Database_Query->execute()
#2 Z:\home\kohana\www\application\classes\Controller\catalog.php(62): Model_Catalog->get_all_where('product', '4', '2101')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 16:11:13 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '\'%2103%\' and `id_pod_category` = \'1\'' at line 1 [ SELECT * FROM `product` WHERE `options` LIKE \'%2103%\' and `id_pod_category` = \'1\' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 16:11:13 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\kohana\www\application\classes\Model\catalog.php(41): Kohana_Database_Query->execute()
#2 Z:\home\kohana\www\application\classes\Controller\catalog.php(62): Model_Catalog->get_all_where('product', '4', '2101')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 16:15:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\classes\Model\catalog.php [ 46 ] in :
2013-05-11 16:15:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 16:15:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\classes\Model\catalog.php [ 46 ] in :
2013-05-11 16:15:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 16:15:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '4' in 'where clause' [ SELECT * FROM `product` WHERE `options` LIKE '%2101%' and `id_pod_category` = `4` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 16:15:53 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\kohana\www\application\classes\Model\catalog.php(41): Kohana_Database_Query->execute()
#2 Z:\home\kohana\www\application\classes\Controller\catalog.php(62): Model_Catalog->get_all_where('product', '4', '2101')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 16:17:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\catalog.php [ 62 ] in :
2013-05-11 16:17:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 16:17:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\catalog.php [ 62 ] in :
2013-05-11 16:17:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 16:24:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: row ~ APPPATH\views\catalog\prodycts.php [ 20 ] in Z:\home\kohana\www\application\views\catalog\prodycts.php:20
2013-05-11 16:24:09 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\prodycts.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 20, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\prodycts.php:20
2013-05-11 16:27:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\catalog.php [ 68 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:68
2013-05-11 16:27:33 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 68, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:68
2013-05-11 16:27:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataarr ~ APPPATH\classes\Controller\catalog.php [ 68 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:68
2013-05-11 16:27:51 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 68, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:68
2013-05-11 16:28:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataarr ~ APPPATH\classes\Controller\catalog.php [ 68 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:68
2013-05-11 16:28:04 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 68, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:68
2013-05-11 16:31:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\catalog\prodycts.php [ 29 ] in :
2013-05-11 16:31:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 16:31:42 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\catalog\prodycts.php [ 14 ] in Z:\home\kohana\www\application\views\catalog\prodycts.php:14
2013-05-11 16:31:42 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\prodycts.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 14, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\catalog\prodycts.php:14
2013-05-11 16:46:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\catalog.php [ 67 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:67
2013-05-11 16:46:40 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 67, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:67
2013-05-11 17:00:15 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant check - assumed 'check' ~ APPPATH\classes\Controller\catalog.php [ 72 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:72
2013-05-11 17:00:15 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(72): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana\...', 72, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:72
2013-05-11 17:00:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 4 ~ APPPATH\classes\Controller\catalog.php [ 72 ] in Z:\home\kohana\www\application\classes\Controller\catalog.php:72
2013-05-11 17:00:34 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\catalog.php(72): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 72, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_price()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\catalog.php:72
2013-05-11 17:37:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\shopcart.php [ 20 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:20
2013-05-11 17:37:57 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(20): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 20, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:20
2013-05-11 17:40:14 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\shopcart.php [ 13 ] in Z:\home\kohana\www\application\views\shopcart.php:13
2013-05-11 17:40:14 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 13, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:13
2013-05-11 17:53:52 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH\views\shopcart.php [ 17 ] in Z:\home\kohana\www\application\views\shopcart.php:17
2013-05-11 17:53:52 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(17): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:17
2013-05-11 17:54:06 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\shopcart.php [ 19 ] in Z:\home\kohana\www\application\views\shopcart.php:19
2013-05-11 17:54:06 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 19, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:19
2013-05-11 18:04:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\shopcart.php [ 20 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:20
2013-05-11 18:04:51 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 20, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:20
2013-05-11 18:14:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:14:44 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:14:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:14:52 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:37 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:38 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:38 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:38 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:39 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:39 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:39 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:39 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:15:45 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:16:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:16:24 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:16:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_text ~ APPPATH\classes\Controller\shopcart.php [ 24 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:24
2013-05-11 18:16:37 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 24, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:24
2013-05-11 18:19:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\shopcart.php [ 36 ] in :
2013-05-11 18:19:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 18:21:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:21:27 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:18
2013-05-11 18:22:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_text ~ APPPATH\classes\Controller\shopcart.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:26
2013-05-11 18:22:04 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:26
2013-05-11 19:56:09 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically ~ APPPATH\classes\myclass.php [ 15 ] in Z:\home\kohana\www\application\classes\myclass.php:15
2013-05-11 19:56:09 --- DEBUG: #0 Z:\home\kohana\www\application\classes\myclass.php(15): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\home\kohana\...', 15, Array)
#1 Z:\home\kohana\www\application\classes\myclass.php(15): Kohana_Request::uri()
#2 Z:\home\kohana\www\application\classes\Controller\base.php(38): Myclass::autorization()
#3 Z:\home\kohana\www\application\classes\Controller\baseuser.php(11): Controller_Base->before()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_BaseUser->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\classes\myclass.php:15
2013-05-11 19:56:45 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically ~ APPPATH\classes\myclass.php [ 15 ] in Z:\home\kohana\www\application\classes\myclass.php:15
2013-05-11 19:56:45 --- DEBUG: #0 Z:\home\kohana\www\application\classes\myclass.php(15): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\home\kohana\...', 15, Array)
#1 Z:\home\kohana\www\application\classes\myclass.php(15): Kohana_Request::uri()
#2 Z:\home\kohana\www\application\classes\Controller\base.php(38): Myclass::autorization()
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\application\classes\myclass.php:15
2013-05-11 20:09:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\users.php [ 10 ] in :
2013-05-11 20:09:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-11 20:09:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pod_cat_id ~ APPPATH\classes\Model\usersm.php [ 16 ] in Z:\home\kohana\www\application\classes\Model\usersm.php:16
2013-05-11 20:09:24 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\usersm.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\application\classes\Controller\users.php(11): Model_Usersm->get_all_where_one('information', '6')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_information()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\usersm.php:16
2013-05-11 20:09:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'id_user' in 'where clause' [ SELECT * FROM `product` WHERE  `id_user` = '6' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 20:09:46 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\kohana\www\application\classes\Model\usersm.php(21): Kohana_Database_Query->execute()
#2 Z:\home\kohana\www\application\classes\Controller\users.php(11): Model_Usersm->get_all_where_one('information', '6')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_information()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-11 20:10:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: information ~ APPPATH\views\users\information.php [ 3 ] in Z:\home\kohana\www\application\views\users\information.php:3
2013-05-11 20:10:24 --- DEBUG: #0 Z:\home\kohana\www\application\views\users\information.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\users\information.php:3