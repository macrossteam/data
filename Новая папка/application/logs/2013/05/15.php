<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-15 01:45:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\base.php [ 32 ] in :
2013-05-15 01:45:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 01:45:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting T_FUNCTION ~ APPPATH\classes\Controller\auth.php [ 4 ] in :
2013-05-15 01:45:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 01:48:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\baseadmin.php [ 41 ] in :
2013-05-15 01:48:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:24:09 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\main.php [ 8 ] in Z:\home\kohana\www\application\classes\Controller\main.php:8
2013-05-15 06:24:09 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\main.php(8): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 8, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\main.php:8
2013-05-15 06:25:28 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\main.php [ 8 ] in Z:\home\kohana\www\application\classes\Controller\main.php:8
2013-05-15 06:25:28 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\main.php(8): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 8, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\main.php:8
2013-05-15 08:28:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dataL ~ APPPATH\views\catalog\cars.php [ 4 ] in Z:\home\kohana\www\application\views\catalog\cars.php:4
2013-05-15 08:28:29 --- DEBUG: #0 Z:\home\kohana\www\application\views\catalog\cars.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 4, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(40): Kohana_View->__toString()
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
2013-05-15 08:29:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_AS ~ APPPATH\classes\Controller\catalog.php [ 10 ] in :
2013-05-15 08:29:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:32:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\catalog\cars.php [ 12 ] in :
2013-05-15 08:32:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:43:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Myclass' not found ~ APPPATH\classes\Controller\registration.php [ 34 ] in :
2013-05-15 09:43:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:47:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC, expecting '{' ~ APPPATH\classes\Myclass.php [ 4 ] in :
2013-05-15 09:47:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:50:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: infs ~ APPPATH\classes\Controller\users.php [ 10 ] in Z:\home\kohana\www\application\classes\Controller\users.php:10
2013-05-15 09:50:32 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\users.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_information()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\users.php:10
2013-05-15 09:54:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: infs ~ APPPATH\classes\Controller\users.php [ 10 ] in Z:\home\kohana\www\application\classes\Controller\users.php:10
2013-05-15 09:54:47 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\users.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_information()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\users.php:10
2013-05-15 09:54:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: infs ~ APPPATH\classes\Controller\users.php [ 10 ] in Z:\home\kohana\www\application\classes\Controller\users.php:10
2013-05-15 09:54:49 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\users.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Users->action_information()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\users.php:10
2013-05-15 09:55:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\users\information.php [ 13 ] in :
2013-05-15 09:55:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:56:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\users\information.php [ 5 ] in :
2013-05-15 09:56:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:57:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: row ~ APPPATH\views\users\information.php [ 16 ] in Z:\home\kohana\www\application\views\users\information.php:16
2013-05-15 09:57:30 --- DEBUG: #0 Z:\home\kohana\www\application\views\users\information.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(40): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\users\information.php:16
2013-05-15 09:58:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\users\information.php [ 14 ] in :
2013-05-15 09:58:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:18:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\users\information.php [ 26 ] in :
2013-05-15 10:18:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:18:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\users\information.php [ 23 ] in :
2013-05-15 10:18:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :