<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-24 01:48:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\config\mysite.php [ 4 ] in :
2013-04-24 01:48:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 01:48:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\config\mysite.php [ 4 ] in :
2013-04-24 01:48:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 01:49:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\config\mysite.php [ 4 ] in :
2013-04-24 01:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 01:55:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\welcome.php [ 2 ] in Z:\home\kohana\www\application\views\welcome.php:2
2013-04-24 01:55:33 --- DEBUG: #0 Z:\home\kohana\www\application\views\welcome.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\kohana\www\application\classes\Controller\Welcome.php(13): Kohana_Response->body(Object(View))
#6 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\kohana\www\application\views\welcome.php:2
2013-04-24 01:56:10 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\kohana\www\application\classes\Controller\Welcome.php on line 13 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:10 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Welcome.php(13): Kohana_View::factory('welcome', '?????? 1 ??????...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:54 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\kohana\www\application\classes\Controller\Welcome.php on line 13 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:54 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Welcome.php(13): Kohana_View::factory('welcome', '?????? 1 ??????...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:55 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\kohana\www\application\classes\Controller\Welcome.php on line 13 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:55 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Welcome.php(13): Kohana_View::factory('welcome', '?????? 1 ??????...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:55 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\kohana\www\application\classes\Controller\Welcome.php on line 13 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:55 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Welcome.php(13): Kohana_View::factory('welcome', '?????? 1 ??????...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:55 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\kohana\www\application\classes\Controller\Welcome.php on line 13 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:55 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Welcome.php(13): Kohana_View::factory('welcome', '?????? 1 ??????...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:55 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\kohana\www\application\classes\Controller\Welcome.php on line 13 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:55 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Welcome.php(13): Kohana_View::factory('welcome', '?????? 1 ??????...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:55 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\kohana\www\application\classes\Controller\Welcome.php on line 13 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:55 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Welcome.php(13): Kohana_View::factory('welcome', '?????? 1 ??????...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:56 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\kohana\www\application\classes\Controller\Welcome.php on line 13 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:56 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Welcome.php(13): Kohana_View::factory('welcome', '?????? 1 ??????...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:56 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\kohana\www\application\classes\Controller\Welcome.php on line 13 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:56:56 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Welcome.php(13): Kohana_View::factory('welcome', '?????? 1 ??????...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:28
2013-04-24 01:58:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in :
2013-04-24 01:58:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-24 01:59:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in :
2013-04-24 01:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :