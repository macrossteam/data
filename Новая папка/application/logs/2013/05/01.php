<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-01 03:57:16 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-01 03:57:16 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(75): Kohana_ORM::factory('User')
#8 Z:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#9 Z:\home\kohana\www\application\classes\Controller\admin\main.php(17): Kohana_Auth->login('admin', 'admin')
#10 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#13 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-05-01 03:59:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\config\auth.php [ 15 ] in :
2013-05-01 03:59:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 05:13:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\classes\Controller\admin\main.php [ 33 ] in :
2013-05-01 05:13:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 05:14:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_log ~ APPPATH\classes\Controller\admin\main.php [ 9 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:9
2013-05-01 05:14:30 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:9
2013-05-01 05:14:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_log ~ APPPATH\classes\Controller\admin\main.php [ 22 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:22
2013-05-01 05:14:44 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 22, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:22
2013-05-01 05:14:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\admin\main.php [ 21 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:21
2013-05-01 05:14:56 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 21, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:21
2013-05-01 05:15:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 05:15:27 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 05:17:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 05:17:35 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:14:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 2 ] in Z:\home\kohana\www\application\views\admin\show.php:2
2013-05-01 07:14:24 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:2
2013-05-01 07:14:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 9 ] in Z:\home\kohana\www\application\views\admin\show.php:9
2013-05-01 07:14:35 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:9
2013-05-01 07:14:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 9 ] in Z:\home\kohana\www\application\views\admin\show.php:9
2013-05-01 07:14:44 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:9
2013-05-01 07:15:20 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\admin\main.php [ 22 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:22
2013-05-01 07:15:20 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(22): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 22, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:22
2013-05-01 07:22:24 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant error - assumed 'error' ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:22:24 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:23:08 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant error - assumed 'error' ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:23:08 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:23:26 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant error - assumed 'error' ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:23:26 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:31:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\admin\show.php [ 4 ] in :
2013-05-01 07:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 07:38:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\views\admin\show.php [ 3 ] in :
2013-05-01 07:38:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 07:39:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\views\admin\show.php [ 3 ] in :
2013-05-01 07:39:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 07:39:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:39:44 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:01 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:22 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:24 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:25 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:27 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:28 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 07:41:38 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:1
2013-05-01 09:30:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:30:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:30:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:30:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:31:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:31:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:31:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:31:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:31:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:31:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:31:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:31:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:32:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:32:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:32:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:32:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:32:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:32:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:32:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:32:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:32:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:32:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:32:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:32:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:33:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:33:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:33:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:33:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:33:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:33:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:33:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:33:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:35:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:35:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:35:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:35:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:35:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:38:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 15 ] in Z:\home\kohana\www\application\views\admin\show.php:15
2013-05-01 09:38:39 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 15, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\show.php:15
2013-05-01 09:43:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 09:43:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\main.php [ 25 ] in :
2013-05-01 09:43:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 10:55:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:55:14 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:56:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:56:20 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:56:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:56:21 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:56:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:56:21 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:56:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:56:22 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:56:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:56:22 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:52 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:53 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:53 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:53 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:54 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:54 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:54 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:54 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:54 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:55 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:55 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:55 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:57:55 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:58:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:58:11 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 10:58:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting '{' ~ APPPATH\classes\Controller\auth.php [ 3 ] in :
2013-05-01 10:58:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 11:00:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\autor.php [ 10 ] in Z:\home\kohana\www\application\classes\Controller\autor.php:10
2013-05-01 11:00:21 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\autor.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Autor->action_autor()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Autor))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\autor.php:10
2013-05-01 11:13:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_ORM::login_in() ~ APPPATH\classes\Controller\autor.php [ 10 ] in :
2013-05-01 11:13:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 11:15:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ';' or '{' ~ APPPATH\classes\Controller\admin\main.php [ 42 ] in :
2013-05-01 11:15:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 11:17:54 --- CRITICAL: ErrorException [ 1 ]: Class 'autor' not found ~ APPPATH\classes\Controller\base.php [ 8 ] in :
2013-05-01 11:17:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 11:42:37 --- CRITICAL: ErrorException [ 1 ]: Class 'autor' not found ~ APPPATH\classes\Controller\base.php [ 8 ] in :
2013-05-01 11:42:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 11:47:39 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'autor' at 'MODPATH\autor' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in Z:\home\kohana\www\application\bootstrap.php:123
2013-05-01 11:47:39 --- DEBUG: #0 Z:\home\kohana\www\application\bootstrap.php(123): Kohana_Core::modules(Array)
#1 Z:\home\kohana\www\index.php(102): require('Z:\home\kohana\...')
#2 {main} in Z:\home\kohana\www\application\bootstrap.php:123
2013-05-01 11:47:39 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'autor' at 'MODPATH\autor' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in Z:\home\kohana\www\application\bootstrap.php:123
2013-05-01 11:47:39 --- DEBUG: #0 Z:\home\kohana\www\application\bootstrap.php(123): Kohana_Core::modules(Array)
#1 Z:\home\kohana\www\index.php(102): require('Z:\home\kohana\...')
#2 {main} in Z:\home\kohana\www\application\bootstrap.php:123
2013-05-01 11:57:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\base.php [ 38 ] in :
2013-05-01 11:57:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 11:57:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\base.php [ 38 ] in :
2013-05-01 11:57:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 11:57:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\base.php [ 38 ] in :
2013-05-01 11:57:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 11:57:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\base.php [ 38 ] in :
2013-05-01 11:57:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 11:57:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\base.php [ 38 ] in :
2013-05-01 11:57:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 11:58:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 11:58:39 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:02:45 --- CRITICAL: ErrorException [ 1 ]: Class 'myclass' not found ~ APPPATH\classes\Controller\base.php [ 10 ] in :
2013-05-01 12:02:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:06:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:06:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:22:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:22:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:23:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:23:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:23:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:23:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:23:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:23:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:23:45 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Myclass::autorization() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\base.php [ 34 ] in Z:\home\kohana\www\application\classes\Controller\base.php:34
2013-05-01 12:23:45 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\base.php(34): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\home\kohana\...', 34, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\base.php:34
2013-05-01 12:23:46 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Myclass::autorization() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\base.php [ 34 ] in Z:\home\kohana\www\application\classes\Controller\base.php:34
2013-05-01 12:23:46 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\base.php(34): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\home\kohana\...', 34, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\base.php:34
2013-05-01 12:23:46 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Myclass::autorization() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\base.php [ 34 ] in Z:\home\kohana\www\application\classes\Controller\base.php:34
2013-05-01 12:23:46 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\base.php(34): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\home\kohana\...', 34, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\base.php:34
2013-05-01 12:23:46 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Myclass::autorization() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\base.php [ 34 ] in Z:\home\kohana\www\application\classes\Controller\base.php:34
2013-05-01 12:23:46 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\base.php(34): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\home\kohana\...', 34, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\base.php:34
2013-05-01 12:24:01 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\myclass.php [ 21 ] in :
2013-05-01 12:24:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:24:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:13 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:34 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:35 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:35 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:35 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\main.php [ 16 ] in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:24:35 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:16
2013-05-01 12:25:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\classes\myclass.php [ 19 ] in :
2013-05-01 12:25:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:32:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Login' not found ~ APPPATH\classes\Controller\base.php [ 34 ] in :
2013-05-01 12:32:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:40:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\views\auth.php [ 5 ] in :
2013-05-01 12:40:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:41:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\auth.php [ 10 ] in :
2013-05-01 12:41:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:42:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH\views\auth.php [ 6 ] in :
2013-05-01 12:42:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 12:42:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\auth.php [ 10 ] in :
2013-05-01 12:42:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:24:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\auth.php [ 11 ] in :
2013-05-01 13:24:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:25:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\auth.php [ 12 ] in :
2013-05-01 13:25:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:25:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\auth.php [ 12 ] in :
2013-05-01 13:25:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:25:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\auth.php [ 12 ] in :
2013-05-01 13:25:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:25:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\auth.php [ 12 ] in :
2013-05-01 13:25:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:25:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\auth.php [ 20 ] in :
2013-05-01 13:25:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:25:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\auth.php [ 19 ] in :
2013-05-01 13:25:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:25:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\auth.php [ 19 ] in :
2013-05-01 13:25:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:25:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\auth.php [ 19 ] in :
2013-05-01 13:25:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:25:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\auth.php [ 19 ] in :
2013-05-01 13:25:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:29:30 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\auth.php [ 7 ] in :
2013-05-01 13:29:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:32:29 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\auth.php [ 7 ] in :
2013-05-01 13:32:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:48:04 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\auth.php [ 7 ] in :
2013-05-01 13:48:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 13:48:11 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\auth.php [ 7 ] in :
2013-05-01 13:48:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 14:20:57 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\auth.php [ 7 ] in :
2013-05-01 14:20:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 14:25:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTTP::request() ~ APPPATH\classes\myclass.php [ 22 ] in :
2013-05-01 14:25:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 14:49:20 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\auth.php [ 7 ] in :
2013-05-01 14:49:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 14:55:40 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\myclass.php [ 15 ] in :
2013-05-01 14:55:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 14:57:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ';' or '{' ~ APPPATH\classes\Controller\admin\main.php [ 14 ] in :
2013-05-01 14:57:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 14:58:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ';' or '{' ~ APPPATH\classes\Controller\admin\main.php [ 14 ] in :
2013-05-01 14:58:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 14:58:36 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/main/registr could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-05-01 14:58:36 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/main/regi...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/main/regi...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\admin\main.php(14): Kohana_View::factory('admin/main/regi...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-05-01 23:48:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH\classes\Controller\registration.php [ 3 ] in :
2013-05-01 23:48:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 23:49:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH\classes\Controller\registration.php [ 3 ] in :
2013-05-01 23:49:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 23:49:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH\classes\Controller\registration.php [ 3 ] in :
2013-05-01 23:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 23:49:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH\classes\Controller\registration.php [ 3 ] in :
2013-05-01 23:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 23:49:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH\classes\Controller\registration.php [ 3 ] in :
2013-05-01 23:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 23:52:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\registration.php [ 17 ] in :
2013-05-01 23:52:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 23:52:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\registration.php [ 17 ] in :
2013-05-01 23:52:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 23:52:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\registration.php [ 17 ] in :
2013-05-01 23:52:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 23:52:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\registration.php [ 17 ] in :
2013-05-01 23:52:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 23:52:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\registration.php [ 17 ] in :
2013-05-01 23:52:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-01 23:53:14 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-01 23:53:14 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 Z:\home\kohana\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 Z:\home\kohana\www\application\classes\Controller\registration.php(15): Model_Auth_User->create_user(Array, Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-01 23:54:35 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:125
2013-05-01 23:54:35 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\kohana\www\application\classes\myclass.php(7): Kohana_Auth::instance()
#5 Z:\home\kohana\www\application\classes\Controller\base.php(34): Myclass::autorization()
#6 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:125