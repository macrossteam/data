<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-26 02:40:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\base.php [ 13 ] in :
2013-04-26 02:40:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-26 02:53:15 --- CRITICAL: ErrorException [ 2 ]: include(dop_function.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\main.php [ 6 ] in Z:\home\kohana\www\application\views\main.php:6
2013-04-26 02:53:15 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(6): Kohana_Core::error_handler(2, 'include(dop_fun...', 'Z:\home\kohana\...', 6, Array)
#1 Z:\home\kohana\www\application\views\main.php(6): include()
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\application\views\main.php:6
2013-04-26 03:16:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\mysite.php [ 13 ] in :
2013-04-26 03:16:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-26 03:49:09 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 84 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-26 03:49:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\kohana\...', 420, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Route.php(420): preg_match('#^(?P<controlle...', 'static/contact', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\kohana\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-26 04:39:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\classes\Controller\static.php [ 13 ] in :
2013-04-26 04:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-26 04:39:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\classes\Controller\static.php [ 13 ] in :
2013-04-26 04:39:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-26 04:42:01 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Base ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 87 ] in Z:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2013-04-26 04:42:01 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2013-04-26 04:42:25 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Base ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 87 ] in Z:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2013-04-26 04:42:25 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2013-04-26 05:44:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\articles.php [ 16 ] in :
2013-04-26 05:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-26 05:45:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\articles.php [ 16 ] in :
2013-04-26 05:45:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-26 05:45:50 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Articles::$pequest ~ APPPATH\classes\Controller\articles.php [ 7 ] in Z:\home\kohana\www\application\classes\Controller\articles.php:7
2013-04-26 05:45:50 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\articles.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohana\...', 7, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Articles->action_article()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\articles.php:7
2013-04-26 06:07:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\config\mysite.php [ 12 ] in :
2013-04-26 06:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :