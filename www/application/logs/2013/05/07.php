<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-07 01:13:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\registration.php [ 14 ] in :
2013-05-07 01:13:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 01:37:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\registration.php [ 8 ] in Z:\home\kohana\www\application\views\registration.php:8
2013-05-07 01:37:02 --- DEBUG: #0 Z:\home\kohana\www\application\views\registration.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 8, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\registration.php:8
2013-05-07 01:37:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\registration.php [ 9 ] in Z:\home\kohana\www\application\views\registration.php:9
2013-05-07 01:37:55 --- DEBUG: #0 Z:\home\kohana\www\application\views\registration.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\registration.php:9
2013-05-07 03:20:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\registration.php [ 43 ] in :
2013-05-07 03:20:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 04:04:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\registration.php [ 35 ] in :
2013-05-07 04:04:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 04:05:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\registration.php [ 6 ] in :
2013-05-07 04:05:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 04:07:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\registration.php [ 46 ] in :
2013-05-07 04:07:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 04:09:01 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Registration::$errors ~ APPPATH\classes\Controller\registration.php [ 35 ] in Z:\home\kohana\www\application\classes\Controller\registration.php:35
2013-05-07 04:09:01 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\registration.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohana\...', 35, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\registration.php:35
2013-05-07 04:23:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\usertable.php [ 16 ] in :
2013-05-07 04:23:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 04:36:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\classes\Model\registration.php [ 18 ] in Z:\home\kohana\www\application\classes\Model\registration.php:18
2013-05-07 04:36:26 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\registration.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\application\classes\Controller\registration.php(73): Model_Registration->reg('qwe123452@mail....', '6cd4de518dda594...', 1)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\registration.php:18
2013-05-07 04:37:35 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'qwe123452@mail.ru' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`) VALUES ('qwe123452@mail.ru', '6cd4de518dda594f9fff8fbc8938c7578121d318c5630e637f4578b5e56b58f1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 04:37:35 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\registration.php(12): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\registration.php(73): Model_Registration->reg('qwe123452@mail....', '6cd4de518dda594...', 1)
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 05:32:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\usertable.php [ 18 ] in :
2013-05-07 05:32:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 05:34:13 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-07 05:34:13 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\kohana\www\application\classes\Model\registration.php(12): Kohana_ORM->save()
#3 Z:\home\kohana\www\application\classes\Controller\registration.php(73): Model_Registration->reg('macrossteam@gma...', '6cd4de518dda594...', 1)
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-07 05:39:09 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-07 05:39:09 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\kohana\www\application\classes\Model\registration.php(12): Kohana_ORM->save()
#3 Z:\home\kohana\www\application\classes\Controller\registration.php(73): Model_Registration->reg('qwe123452@mail....', '6cd4de518dda594...', 1)
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-07 05:40:11 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-07 05:40:11 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\kohana\www\application\classes\Model\registration.php(12): Kohana_ORM->save()
#3 Z:\home\kohana\www\application\classes\Controller\registration.php(73): Model_Registration->reg('steam@mail.ru', '6cd4de518dda594...', 1)
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-07 06:12:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ] in :
2013-05-07 06:12:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 06:18:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ] in :
2013-05-07 06:18:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 06:32:31 --- CRITICAL: ErrorException [ 4096 ]: Object of class Myclass could not be converted to string ~ APPPATH\classes\Controller\registration.php [ 38 ] in Z:\home\kohana\www\application\classes\Controller\registration.php:38
2013-05-07 06:32:31 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\registration.php(38): Kohana_Core::error_handler(4096, 'Object of class...', 'Z:\home\kohana\...', 38, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\registration.php:38
2013-05-07 06:33:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: to ~ APPPATH\classes\Controller\registration.php [ 39 ] in Z:\home\kohana\www\application\classes\Controller\registration.php:39
2013-05-07 06:33:24 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\registration.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 39, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\registration.php:39
2013-05-07 06:34:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'email' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `email` = 'macrossteam@gmail.com' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 06:34:33 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(76): Kohana_ORM->find()
#4 Z:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('macrossteam@gma...', 'qwe123452', false)
#5 Z:\home\kohana\www\application\classes\myclass.php(25): Kohana_Auth->login('macrossteam@gma...', 'qwe123452')
#6 Z:\home\kohana\www\application\classes\Controller\base.php(36): Myclass::autorization()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 06:36:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'email' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `email` = 'macrossteam@gmail.com' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 06:36:13 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(76): Kohana_ORM->find()
#4 Z:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('macrossteam@gma...', 'qwe123452', false)
#5 Z:\home\kohana\www\application\classes\myclass.php(25): Kohana_Auth->login('macrossteam@gma...', 'qwe123452')
#6 Z:\home\kohana\www\application\classes\Controller\base.php(36): Myclass::autorization()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 06:36:49 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-07 06:36:49 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1359): Kohana_ORM->check(NULL)
#1 Z:\home\kohana\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(270): Model_Auth_User->complete_login()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#5 Z:\home\kohana\www\application\classes\myclass.php(25): Kohana_Auth->login('admin', 'admin')
#6 Z:\home\kohana\www\application\classes\Controller\base.php(36): Myclass::autorization()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-07 06:37:08 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-07 06:37:08 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1359): Kohana_ORM->check(NULL)
#1 Z:\home\kohana\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(270): Model_Auth_User->complete_login()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#5 Z:\home\kohana\www\application\classes\myclass.php(25): Kohana_Auth->login('admin', 'admin')
#6 Z:\home\kohana\www\application\classes\Controller\base.php(36): Myclass::autorization()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-07 07:56:30 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-07 07:56:30 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1359): Kohana_ORM->check(NULL)
#1 Z:\home\kohana\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(270): Model_Auth_User->complete_login()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 Z:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#5 Z:\home\kohana\www\application\classes\myclass.php(25): Kohana_Auth->login('admin', 'admin')
#6 Z:\home\kohana\www\application\classes\Controller\base.php(36): Myclass::autorization()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-07 07:57:36 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'email' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `email` = 'macrossteam@gmail.com' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 07:57:36 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(76): Kohana_ORM->find()
#4 Z:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('macrossteam@gma...', 'qwe123452', false)
#5 Z:\home\kohana\www\application\classes\myclass.php(25): Kohana_Auth->login('macrossteam@gma...', 'qwe123452')
#6 Z:\home\kohana\www\application\classes\Controller\base.php(36): Myclass::autorization()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 08:15:29 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\registration.php [ 3 ] in Z:\home\kohana\www\application\views\registration.php:3
2013-05-07 08:15:29 --- DEBUG: #0 Z:\home\kohana\www\application\views\registration.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 3, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\registration.php:3
2013-05-07 08:16:06 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`) VALUES ('master@mail.ru', '007b6baae3261ca1587682eb1290d3ebcaf084a03db5b40522063d7bd0fa3316') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 08:16:06 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\registration.php(12): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\registration.php(81): Model_Registration->reg('master@mail.ru', '007b6baae3261ca...', 1)
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 08:21:35 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`) VALUES ('qwe123452@mail.ru', '007b6baae3261ca1587682eb1290d3ebcaf084a03db5b40522063d7bd0fa3316') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 08:21:35 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\registration.php(12): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\registration.php(80): Model_Registration->reg('qwe123452@mail....', '007b6baae3261ca...', 1)
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-07 11:30:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Controller\shopcart.php [ 3 ] in :
2013-05-07 11:30:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:33:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting ',' or ';' ~ APPPATH\views\shopcart.php [ 8 ] in :
2013-05-07 11:33:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:33:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\shopcart.php [ 5 ] in Z:\home\kohana\www\application\views\shopcart.php:5
2013-05-07 11:33:11 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 5, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:5
2013-05-07 11:35:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\views\shopcart.php [ 7 ] in :
2013-05-07 11:35:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:36:26 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\shopcart.php [ 3 ] in Z:\home\kohana\www\application\views\shopcart.php:3
2013-05-07 11:36:26 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 3, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:3
2013-05-07 11:37:15 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\shopcart.php [ 3 ] in Z:\home\kohana\www\application\views\shopcart.php:3
2013-05-07 11:37:15 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 3, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:3
2013-05-07 11:37:25 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\shopcart.php [ 3 ] in Z:\home\kohana\www\application\views\shopcart.php:3
2013-05-07 11:37:25 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 3, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:3
2013-05-07 11:41:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\shopcart.php [ 14 ] in :
2013-05-07 11:41:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:43:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function var_data() ~ APPPATH\classes\Controller\shopcart.php [ 18 ] in :
2013-05-07 11:43:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:46:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: row ~ APPPATH\views\shopcart.php [ 9 ] in Z:\home\kohana\www\application\views\shopcart.php:9
2013-05-07 11:46:46 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:9
2013-05-07 11:46:57 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\views\shopcart.php [ 10 ] in Z:\home\kohana\www\application\views\shopcart.php:10
2013-05-07 11:46:57 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(10): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\kohana\...', 10, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:10
2013-05-07 11:48:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\shopcart.php [ 9 ] in Z:\home\kohana\www\application\views\shopcart.php:9
2013-05-07 11:48:30 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 9, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:9
2013-05-07 11:49:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\shopcart.php [ 14 ] in :
2013-05-07 11:49:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 11:49:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\shopcart.php [ 14 ] in :
2013-05-07 11:49:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 13:04:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\shopcart.php [ 20 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:20
2013-05-07 13:04:14 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 20, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:20
2013-05-07 13:18:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\shopcart.php [ 14 ] in :
2013-05-07 13:18:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 13:25:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopcheck ~ APPPATH\views\shopcart.php [ 20 ] in Z:\home\kohana\www\application\views\shopcart.php:20
2013-05-07 13:25:29 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 20, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:20
2013-05-07 13:31:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: check_del ~ APPPATH\classes\Controller\shopcart.php [ 25 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:25
2013-05-07 13:31:41 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:25
2013-05-07 13:40:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\shopcart.php [ 26 ] in :
2013-05-07 13:40:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-07 13:40:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopcheck ~ APPPATH\classes\Controller\shopcart.php [ 35 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:35
2013-05-07 13:40:34 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 35, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:35
2013-05-07 13:41:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: shopcheck ~ APPPATH\classes\Controller\shopcart.php [ 35 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:35
2013-05-07 13:41:03 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 35, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:35
2013-05-07 13:41:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: label ~ APPPATH\views\shopcart.php [ 20 ] in Z:\home\kohana\www\application\views\shopcart.php:20
2013-05-07 13:41:17 --- DEBUG: #0 Z:\home\kohana\www\application\views\shopcart.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 20, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\shopcart.php:20
2013-05-07 13:43:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: check_del ~ APPPATH\classes\Controller\shopcart.php [ 29 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:29
2013-05-07 13:43:02 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 29, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:29
2013-05-07 13:43:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: check_del ~ APPPATH\classes\Controller\shopcart.php [ 29 ] in Z:\home\kohana\www\application\classes\Controller\shopcart.php:29
2013-05-07 13:43:22 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\shopcart.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 29, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Shopcart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Shopcart))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\shopcart.php:29