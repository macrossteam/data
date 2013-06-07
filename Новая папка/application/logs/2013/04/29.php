<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-29 02:10:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting ')' ~ APPPATH\config\admin.php [ 15 ] in :
2013-04-29 02:10:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 02:11:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: config_name ~ APPPATH\classes\Controller\base.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\base.php:25
2013-04-29 02:11:03 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\base.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\base.php:25
2013-04-29 02:14:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\base.php [ 15 ] in :
2013-04-29 02:14:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 03:37:35 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 91 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-29 03:37:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\kohana\...', 420, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Route.php(420): preg_match('#^admin/(?P<con...', 'admin', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\kohana\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-29 03:37:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 91 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-29 03:37:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\kohana\...', 420, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Route.php(420): preg_match('#^admin/(?P<con...', 'favicon.ico', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\kohana\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-29 03:37:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 91 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-29 03:37:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\kohana\...', 420, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Route.php(420): preg_match('#^admin/(?P<con...', 'favicon.ico', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\kohana\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-29 03:44:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\admin\main.php [ 10 ] in :
2013-04-29 03:44:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 03:49:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\base.php [ 13 ] in :
2013-04-29 03:49:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 03:58:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: con ~ APPPATH\classes\Controller\base.php [ 31 ] in Z:\home\kohana\www\application\classes\Controller\base.php:31
2013-04-29 03:58:28 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\base.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 31, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\base.php:31
2013-04-29 05:49:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH\views\admin\show.php [ 1 ] in :
2013-04-29 05:49:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 05:57:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\admin\main.php [ 10 ] in :
2013-04-29 05:57:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 05:57:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\admin\main.php [ 11 ] in :
2013-04-29 05:57:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 05:57:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\admin\main.php [ 11 ] in :
2013-04-29 05:57:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 05:57:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\admin\main.php [ 11 ] in :
2013-04-29 05:57:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 05:57:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\admin\main.php [ 11 ] in :
2013-04-29 05:57:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 05:57:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\show.php [ 9 ] in Z:\home\kohana\www\application\views\admin\show.php:9
2013-04-29 05:57:45 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
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
2013-04-29 05:58:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\show.php [ 9 ] in Z:\home\kohana\www\application\views\admin\show.php:9
2013-04-29 05:58:16 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
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
2013-04-29 05:58:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\show.php [ 9 ] in Z:\home\kohana\www\application\views\admin\show.php:9
2013-04-29 05:58:17 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
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
2013-04-29 05:58:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\show.php [ 9 ] in Z:\home\kohana\www\application\views\admin\show.php:9
2013-04-29 05:58:37 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
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
2013-04-29 05:58:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\show.php [ 9 ] in Z:\home\kohana\www\application\views\admin\show.php:9
2013-04-29 05:58:39 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
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
2013-04-29 05:58:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\show.php [ 9 ] in Z:\home\kohana\www\application\views\admin\show.php:9
2013-04-29 05:58:39 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
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
2013-04-29 08:40:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\admin\main.php [ 11 ] in :
2013-04-29 08:40:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-29 08:40:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\admin\main.php [ 13 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:13
2013-04-29 08:40:25 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 13, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:13
2013-04-29 08:40:26 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:40:26 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:40:26 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:40:26 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:40:35 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:40:35 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:40:46 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:40:46 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:41:15 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:41:15 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:09 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:09 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:12 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:20 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:20 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:20 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:20 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:21 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:35 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:35 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:36 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:36 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:36 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:42:36 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:43:01 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:43:01 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:43:02 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:43:02 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:43:02 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:43:02 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:44:13 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:44:13 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:44:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:44:58 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:44:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:44:58 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:44:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:44:58 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:35 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:35 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:36 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:36 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:36 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:36 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:36 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:36 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:36 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:36 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:37 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:46:37 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2013-04-29 08:48:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_log ~ APPPATH\classes\Controller\admin\main.php [ 14 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:14
2013-04-29 08:48:25 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 14, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:14
2013-04-29 10:21:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\admin\main.php [ 21 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:21
2013-04-29 10:21:38 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 21, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:21
2013-04-29 10:43:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\admin\main.php [ 23 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:23
2013-04-29 10:43:20 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:23
2013-04-29 10:43:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\admin\main.php [ 23 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:23
2013-04-29 10:43:41 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:23
2013-04-29 13:52:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\admin\main.php [ 23 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:23
2013-04-29 13:52:18 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:23
2013-04-29 13:52:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\admin\main.php [ 23 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:23
2013-04-29 13:52:23 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:23
2013-04-29 13:53:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-04-29 13:53:00 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
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
2013-04-29 13:53:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-04-29 13:53:45 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
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
2013-04-29 13:53:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-04-29 13:53:45 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
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
2013-04-29 13:53:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-04-29 13:53:46 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
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
2013-04-29 13:53:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-04-29 13:53:46 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
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
2013-04-29 13:53:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\admin\show.php [ 1 ] in Z:\home\kohana\www\application\views\admin\show.php:1
2013-04-29 13:53:49 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\show.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
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