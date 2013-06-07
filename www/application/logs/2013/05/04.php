<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-04 13:12:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\myclass.php [ 48 ] in :
2013-05-04 13:12:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:13:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\myclass.php [ 48 ] in :
2013-05-04 13:13:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:13:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\registration.php [ 41 ] in :
2013-05-04 13:13:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:14:23 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_Regcode class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-04 13:14:23 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('username')
#1 Z:\home\kohana\www\application\classes\Model\registration.php(34): Kohana_ORM->__get('username')
#2 Z:\home\kohana\www\application\classes\Controller\registration.php(20): Model_Registration->reg_email_select('qwe123452@mail....')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-04 13:17:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-05-04 13:17:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:21:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: r_email ~ APPPATH\classes\Model\registration.php [ 44 ] in Z:\home\kohana\www\application\classes\Model\registration.php:44
2013-05-04 13:21:50 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\registration.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 44, Array)
#1 Z:\home\kohana\www\application\classes\Controller\registration.php(20): Model_Registration->reg_email_select('zxcbsdfsdf')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\registration.php:44
2013-05-04 13:22:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Registration::reg_code_insert() ~ APPPATH\classes\Controller\registration.php [ 25 ] in :
2013-05-04 13:22:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :