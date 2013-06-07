<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-02 00:08:12 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-02 00:08:12 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#1 Z:\home\kohana\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 Z:\home\kohana\www\application\classes\Controller\registration.php(15): Model_Auth_User->create_user(Array, Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-02 00:35:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hash ~ APPPATH\views\registration.php [ 2 ] in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:35:59 --- DEBUG: #0 Z:\home\kohana\www\application\views\registration.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hash ~ APPPATH\views\registration.php [ 2 ] in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:09 --- DEBUG: #0 Z:\home\kohana\www\application\views\registration.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hash ~ APPPATH\views\registration.php [ 2 ] in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:10 --- DEBUG: #0 Z:\home\kohana\www\application\views\registration.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hash ~ APPPATH\views\registration.php [ 2 ] in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:10 --- DEBUG: #0 Z:\home\kohana\www\application\views\registration.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hash ~ APPPATH\views\registration.php [ 2 ] in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:10 --- DEBUG: #0 Z:\home\kohana\www\application\views\registration.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hash ~ APPPATH\views\registration.php [ 2 ] in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:10 --- DEBUG: #0 Z:\home\kohana\www\application\views\registration.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hash ~ APPPATH\views\registration.php [ 2 ] in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 00:36:10 --- DEBUG: #0 Z:\home\kohana\www\application\views\registration.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\registration.php:2
2013-05-02 02:45:06 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-02 02:45:06 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 Z:\home\kohana\www\application\views\auth.php(8): Kohana_ORM->__get('name')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\main.php(16): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-02 02:52:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\auth.php [ 12 ] in :
2013-05-02 02:52:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 02:56:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\auth.php [ 12 ] in :
2013-05-02 02:56:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 02:57:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\auth.php [ 12 ] in :
2013-05-02 02:57:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 02:58:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_user() ~ APPPATH\classes\Controller\admin\main.php [ 7 ] in :
2013-05-02 02:58:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 02:58:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_name ~ APPPATH\classes\Controller\admin\main.php [ 9 ] in Z:\home\kohana\www\application\classes\Controller\admin\main.php:9
2013-05-02 02:58:37 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\main.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\main.php:9
2013-05-02 08:09:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\registration.php [ 20 ] in :
2013-05-02 08:09:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 08:09:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\registration.php [ 24 ] in :
2013-05-02 08:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-02 08:10:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Registration' not found ~ APPPATH\classes\Controller\registration.php [ 18 ] in :
2013-05-02 08:10:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :