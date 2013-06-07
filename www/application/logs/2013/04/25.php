<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-25 05:00:26 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\views\main.php [ 6 ] in Z:\home\kohana\www\application\views\main.php:6
2013-04-25 05:00:26 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana\...', 6, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:6
2013-04-25 06:22:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\mysite.php [ 8 ] in :
2013-04-25 06:22:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-25 06:23:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 6 ] in Z:\home\kohana\www\application\views\main.php:6
2013-04-25 06:23:07 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 6, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:6