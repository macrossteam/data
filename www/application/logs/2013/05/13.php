<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-13 00:37:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\views\shopcart.php [ 15 ] in Z:\home\kohana\www\application\views\shopcart.php:15
2013-05-13 00:37:44 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 15, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:15
2013-05-13 00:42:11 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\shopcart.php [ 31 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:31
2013-05-13 00:42:11 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(31): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 31, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:31
2013-05-13 03:47:57 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\shopcart.php [ 31 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:31
2013-05-13 03:47:57 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(31): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 31, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:31
2013-05-13 03:55:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: SESSION ~ APPPATH\classes\Controller\shopcart.php [ 30 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 03:55:18 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 30, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 03:55:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: countpr ~ APPPATH\classes\Controller\shopcart.php [ 30 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 03:55:29 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(30): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 30, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 03:55:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: countpr ~ APPPATH\classes\Controller\shopcart.php [ 30 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 03:55:47 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(30): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 30, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 03:55:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\shopcart.php [ 30 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 03:55:55 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(30): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 30, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 03:56:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\Controller\shopcart.php [ 30 ] in :
2013-05-13 03:56:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 03:56:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 2 ~ APPPATH\classes\Controller\shopcart.php [ 30 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 03:56:37 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(30): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 30, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 03:59:30 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant count - assumed 'count' ~ APPPATH\views\shopcart.php [ 18 ] in Z:\home\kohana\www\application\views\shopcart.php:18
2013-05-13 03:59:30 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(18): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana\...', 18, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:18
2013-05-13 04:03:21 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: count ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 04:03:21 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(30): Kohana_View->__get('count')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 04:04:22 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: count ~ SYSPATH\classes\Kohana\View.php [ 171 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 04:04:22 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(30): Kohana_View->__get('count')
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:30
2013-05-13 04:05:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_VARIABLE or '$' ~ APPPATH\views\shopcart.php [ 19 ] in :
2013-05-13 04:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:06:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\shopcart.php [ 16 ] in Z:\home\kohana\www\application\views\shopcart.php:16
2013-05-13 04:06:00 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 16, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:16
2013-05-13 04:06:08 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\views\shopcart.php [ 18 ] in :
2013-05-13 04:06:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:06:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 3 ~ APPPATH\views\shopcart.php [ 16 ] in Z:\home\kohana\www\application\views\shopcart.php:16
2013-05-13 04:06:34 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 16, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:16
2013-05-13 04:06:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\shopcart.php [ 16 ] in Z:\home\kohana\www\application\views\shopcart.php:16
2013-05-13 04:06:44 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(16): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 16, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:16
2013-05-13 04:06:59 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\shopcart.php [ 16 ] in Z:\home\kohana\www\application\views\shopcart.php:16
2013-05-13 04:06:59 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(16): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 16, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:16
2013-05-13 04:08:43 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\views\shopcart.php [ 18 ] in :
2013-05-13 04:08:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:34:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\admin\main.php [ 38 ] in :
2013-05-13 04:34:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:35:21 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\baseadmin.php [ 9 ] in Z:\home\kohana\www\application\classes\Controller\baseadmin.php:9
2013-05-13 04:35:21 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\baseadmin.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Baseadmin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\baseadmin.php:9
2013-05-13 04:35:32 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\baseadmin.php [ 9 ] in Z:\home\kohana\www\application\classes\Controller\baseadmin.php:9
2013-05-13 04:35:32 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\baseadmin.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Baseadmin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\baseadmin.php:9
2013-05-13 04:35:36 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\baseadmin.php [ 9 ] in Z:\home\kohana\www\application\classes\Controller\baseadmin.php:9
2013-05-13 04:35:36 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\baseadmin.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Baseadmin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\baseadmin.php:9
2013-05-13 04:35:39 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\baseadmin.php [ 9 ] in Z:\home\kohana\www\application\classes\Controller\baseadmin.php:9
2013-05-13 04:35:39 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\baseadmin.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Baseadmin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\baseadmin.php:9
2013-05-13 04:37:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\admin\main.php [ 39 ] in :
2013-05-13 04:37:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:38:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\admin\main.php [ 39 ] in :
2013-05-13 04:38:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:38:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\admin\main.php [ 39 ] in :
2013-05-13 04:38:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:40:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\admin\main.php [ 59 ] in :
2013-05-13 04:40:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:44:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\admin\main.php [ 38 ] in :
2013-05-13 04:44:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:44:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\admin\main.php [ 52 ] in :
2013-05-13 04:44:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:56:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\admin\main.php [ 61 ] in :
2013-05-13 04:56:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:56:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\admin\main.php [ 61 ] in :
2013-05-13 04:56:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:58:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\admin\main.php [ 65 ] in :
2013-05-13 04:58:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:58:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\admin\main.php [ 65 ] in :
2013-05-13 04:58:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:58:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\orderstatus.php [ 17 ] in :
2013-05-13 04:58:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 04:59:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name0 ~ APPPATH\classes\Model\orderstatus.php [ 17 ] in Z:\home\kohana\www\application\classes\Model\orderstatus.php:17
2013-05-13 04:59:08 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\orderstatus.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\application\classes\Controller\admin\main.php(67): Model_Orderstatus->chenge_status('388317248', 1)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_order()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\orderstatus.php:17
2013-05-13 05:13:35 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main.php [ 12 ] in Z:\home\kohana\www\application\views\main.php:12
2013-05-13 05:13:35 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(12): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 12, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:12
2013-05-13 05:13:49 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main.php [ 12 ] in Z:\home\kohana\www\application\views\main.php:12
2013-05-13 05:13:49 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(12): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 12, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:12
2013-05-13 05:14:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 17 ] in :
2013-05-13 05:14:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 05:18:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: config_name ~ APPPATH\classes\Controller\base.php [ 15 ] in Z:\home\kohana\www\application\classes\Controller\base.php:15
2013-05-13 05:18:53 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\base.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 15, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\base.php:15
2013-05-13 05:26:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_BaseAdmin' not found ~ APPPATH\classes\Controller\admin.php [ 3 ] in :
2013-05-13 05:26:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 05:54:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Usersm::chenge_price_count() ~ APPPATH\classes\Controller\admin.php [ 75 ] in :
2013-05-13 05:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :