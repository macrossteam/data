<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-09 04:17:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\parts.php [ 25 ] in :
2013-05-09 04:17:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 04:18:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\parts.php [ 25 ] in :
2013-05-09 04:18:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 04:27:55 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Session::get(), called in Z:\home\kohana\www\application\classes\Controller\shopcart.php on line 12 and defined ~ SYSPATH\classes\Kohana\Session.php [ 211 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:211
2013-05-09 04:27:55 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(211): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\kohana\...', 211, Array)
#1 Z:\home\kohana\www\application\classes\Controller\shopcart.php(12): Kohana_Session->get()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:211
2013-05-09 04:28:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 22 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:22
2013-05-09 04:28:17 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 22, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:22
2013-05-09 04:28:42 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:28:42 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:36:32 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\shopcart.php [ 24 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:24
2013-05-09 04:36:32 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 24, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:24
2013-05-09 04:39:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\classes\Controller\parts.php [ 27 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:27
2013-05-09 04:39:42 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 27, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:27
2013-05-09 04:39:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\classes\Controller\parts.php [ 27 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:27
2013-05-09 04:39:58 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 27, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:27
2013-05-09 04:40:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\classes\Controller\parts.php [ 28 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:28
2013-05-09 04:40:32 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:28
2013-05-09 04:40:48 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\shopcart.php [ 24 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:24
2013-05-09 04:40:48 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 24, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:24
2013-05-09 04:44:23 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\shopcart.php [ 13 ] in Z:\home\kohana\www\application\views\shopcart.php:13
2013-05-09 04:44:23 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 13, Array)
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
2013-05-09 04:44:34 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\shopcart.php [ 13 ] in Z:\home\kohana\www\application\views\shopcart.php:13
2013-05-09 04:44:34 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 13, Array)
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
2013-05-09 04:44:42 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\shopcart.php [ 13 ] in Z:\home\kohana\www\application\views\shopcart.php:13
2013-05-09 04:44:42 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 13, Array)
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
2013-05-09 04:46:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pr ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:46:20 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pr ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:45 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pr ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:46 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pr ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:46 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pr ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:47 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pr ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:47 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pr ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:47 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pr ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:47:48 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 04:48:55 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:48:55 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:57 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:57 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:58 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:58 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:58 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:58 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:58 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:58 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:59 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:59 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:59 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:59 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:59 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:59 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:59 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:59 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:59 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:49:59 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:50:00 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:50:00 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 04:51:15 --- CRITICAL: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The first argument should be either a string or an integer ~ SYSPATH\classes\Kohana\Session.php [ 213 ] in :
2013-05-09 04:51:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', 'Z:\home\kohana\...', 213, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Session.php(213): array_key_exists(Array, Array)
#2 Z:\home\kohana\www\application\classes\Controller\shopcart.php(13): Kohana_Session->get(Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-09 04:51:48 --- CRITICAL: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The first argument should be either a string or an integer ~ SYSPATH\classes\Kohana\Session.php [ 213 ] in :
2013-05-09 04:51:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', 'Z:\home\kohana\...', 213, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Session.php(213): array_key_exists(Array, Array)
#2 Z:\home\kohana\www\application\classes\Controller\shopcart.php(13): Kohana_Session->get(Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-09 04:51:53 --- CRITICAL: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The first argument should be either a string or an integer ~ SYSPATH\classes\Kohana\Session.php [ 213 ] in :
2013-05-09 04:51:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', 'Z:\home\kohana\...', 213, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Session.php(213): array_key_exists(Array, Array)
#2 Z:\home\kohana\www\application\classes\Controller\shopcart.php(13): Kohana_Session->get(Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-09 05:32:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: chekey ~ APPPATH\classes\Controller\parts.php [ 28 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:28
2013-05-09 05:32:38 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:28
2013-05-09 05:35:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\views\parts.php [ 15 ] in :
2013-05-09 05:35:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 05:37:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Авторизоваться ~ APPPATH\classes\Controller\parts.php [ 27 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:27
2013-05-09 05:37:40 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 27, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:27
2013-05-09 09:49:32 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\views\shopcart.php [ 13 ] in Z:\home\kohana\www\application\views\shopcart.php:13
2013-05-09 09:49:32 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(13): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 13, Array)
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
2013-05-09 09:50:54 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\views\shopcart.php [ 13 ] in Z:\home\kohana\www\application\views\shopcart.php:13
2013-05-09 09:50:54 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(13): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 13, Array)
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
2013-05-09 09:51:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: checkey ~ APPPATH\classes\Controller\parts.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 09:51:05 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 09:53:16 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 09:53:16 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 09:53:34 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 09:53:34 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 09:55:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: checkarr ~ APPPATH\classes\Controller\parts.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 09:55:57 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 09:56:29 --- CRITICAL: ErrorException [ 1 ]: Cannot use [] for reading ~ APPPATH\classes\Controller\parts.php [ 26 ] in :
2013-05-09 09:56:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 09:56:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: checkarr ~ APPPATH\classes\Controller\parts.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 09:56:35 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 09:56:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: checkarr ~ APPPATH\classes\Controller\parts.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 09:56:42 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 09:56:59 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 09:56:59 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, 1)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 09:57:47 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 4 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:57:50 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 1 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:57:50 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 2 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:57:51 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 3 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:57:52 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 4 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:57:53 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 3 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:57:54 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 2 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:57:54 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 1 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:58:35 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 1 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:58:41 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 1 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:58:43 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 1 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:58:44 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 1 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:58:44 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 2 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:58:45 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 3 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:58:45 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 4 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:58:46 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 4 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:58:47 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 4 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:59:40 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 4 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:59:41 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 4 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:59:42 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 1 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:59:43 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 2 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:59:44 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 3 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 09:59:44 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 4 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 10:00:27 --- ERROR: ErrorException [ 8 ]: session_write_close() [function.session-write-close]: Skipping numeric key 1 ~ SYSPATH\classes\Kohana\Session\Native.php [ 68 ] in :
2013-05-09 10:10:26 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\views\shopcart.php [ 13 ] in Z:\home\kohana\www\application\views\shopcart.php:13
2013-05-09 10:10:26 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(13): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 13, Array)
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
2013-05-09 10:16:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL ~ APPPATH\classes\Controller\parts.php [ 28 ] in :
2013-05-09 10:16:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 10:16:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ',' or ';' ~ APPPATH\classes\Controller\base.php [ 23 ] in :
2013-05-09 10:16:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 10:17:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: checkey ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 10:17:24 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 10:17:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\parts.php [ 28 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:28
2013-05-09 10:17:46 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:28
2013-05-09 10:20:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopdata ~ APPPATH\classes\Controller\shopcart.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:25
2013-05-09 10:20:18 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:25
2013-05-09 10:22:33 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 10:22:33 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(27): Kohana_Session->set(Array, 'order4')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 10:22:49 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 10:22:49 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(27): Kohana_Session->set(Array, 'order4')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 10:25:03 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 10:25:03 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 10:26:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 4 ~ APPPATH\classes\Controller\parts.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:26:22 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:27:56 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\classes\Controller\parts.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:27:56 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:29:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cart ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 10:29:04 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 10:29:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: checkey ~ APPPATH\classes\Controller\parts.php [ 21 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:21
2013-05-09 10:29:18 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 21, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:21
2013-05-09 10:29:51 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 10:29:51 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 10:30:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 1 ~ APPPATH\classes\Controller\parts.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 10:30:04 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:25
2013-05-09 10:32:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 1 ~ APPPATH\classes\Controller\parts.php [ 28 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:28
2013-05-09 10:32:23 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:28
2013-05-09 10:32:40 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\Kohana\Session.php [ 245 ] in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 10:32:40 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Session.php(245): Kohana_Core::error_handler(2, 'Illegal offset ...', 'Z:\home\kohana\...', 245, Array)
#1 Z:\home\kohana\www\application\classes\Controller\parts.php(28): Kohana_Session->set(Array, Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Session.php:245
2013-05-09 10:33:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\parts.php [ 39 ] in :
2013-05-09 10:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 10:34:17 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 4 ~ APPPATH\classes\Controller\parts.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:34:17 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:36:05 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 4 ~ APPPATH\classes\Controller\parts.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:36:05 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:36:17 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 4 ~ APPPATH\classes\Controller\parts.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:36:17 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:36:28 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 4 ~ APPPATH\classes\Controller\parts.php [ 26 ] in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 10:36:28 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\parts.php(26): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Parts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\parts.php:26
2013-05-09 11:09:05 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\views\shopcart.php [ 13 ] in Z:\home\kohana\www\application\views\shopcart.php:13
2013-05-09 11:09:05 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(13): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 13, Array)
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
2013-05-09 11:09:45 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH\views\shopcart.php [ 14 ] in Z:\home\kohana\www\application\views\shopcart.php:14
2013-05-09 11:09:45 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(14): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 14, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:14
2013-05-09 11:10:10 --- CRITICAL: ErrorException [ 1 ]: Cannot use string offset as an array ~ APPPATH\views\shopcart.php [ 13 ] in :
2013-05-09 11:10:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 11:12:54 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\views\shopcart.php [ 13 ] in Z:\home\kohana\www\application\views\shopcart.php:13
2013-05-09 11:12:54 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(13): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 13, Array)
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
2013-05-09 11:22:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTTP::REQUEST() ~ APPPATH\classes\Controller\shopcart.php [ 20 ] in :
2013-05-09 11:22:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 12:38:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cart ~ APPPATH\classes\Controller\shopcart.php [ 11 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:11
2013-05-09 12:38:16 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 11, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:11
2013-05-09 12:38:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\shopcart.php [ 10 ] in :
2013-05-09 12:38:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 12:40:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\shopcart.php [ 24 ] in :
2013-05-09 12:40:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 12:41:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\shopcart.php [ 24 ] in :
2013-05-09 12:41:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-09 12:42:48 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\views\parts.php [ 14 ] in Z:\home\kohana\www\application\views\parts.php:14
2013-05-09 12:42:48 --- DEBUG: #0 Z:\home\kohana\www\application\views\parts.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 14, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(33): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Parts))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\parts.php:14
2013-05-09 12:43:19 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\views\shopcart.php [ 15 ] in Z:\home\kohana\www\application\views\shopcart.php:15
2013-05-09 12:43:19 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana\...', 15, Array)
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