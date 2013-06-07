<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-05 01:42:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Myclass::email_send() ~ APPPATH\classes\Controller\registration.php [ 29 ] in :
2013-05-05 01:42:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 01:43:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\myclass.php [ 48 ] in :
2013-05-05 01:43:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 01:43:37 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'qwe123452@mail.ru' for key 'PRIMARY' [ INSERT INTO `regcodetable` (`email`, `password`, `r_code`) VALUES ('qwe123452@mail.ru', '6d764b8d6518713462f1185f94c915e01ee57c2e6be1b32268ec5b323e63aee4', 641877) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 01:43:37 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\registration.php(25): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\registration.php(25): Model_Registration->reg_insert('qwe123452@mail....', '6d764b8d6518713...')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 01:46:59 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'qwe123452@mail.ru' for key 'PRIMARY' [ INSERT INTO `regcodetable` (`email`, `password`, `r_code`) VALUES ('qwe123452@mail.ru', '6d764b8d6518713462f1185f94c915e01ee57c2e6be1b32268ec5b323e63aee4', 323230) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 01:46:59 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\registration.php(25): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\registration.php(25): Model_Registration->reg_insert('qwe123452@mail....', '6d764b8d6518713...')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 02:21:48 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 183 ] in :
2013-05-05 02:21:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\kohana\...', 183, Array)
#1 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Transport\MailTransport.php(183): sprintf('Array', 'macrossteam@gma...')
#2 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 Z:\home\kohana\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 Z:\home\kohana\www\application\classes\myclass.php(53): Email::send('qwe123452@mail....', 'macrossteam@gma...', '???????????????...', '???????????????...', false)
#5 Z:\home\kohana\www\application\classes\Controller\registration.php(29): Myclass::email_send()
#6 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-05-05 02:22:04 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 183 ] in :
2013-05-05 02:22:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\kohana\...', 183, Array)
#1 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Transport\MailTransport.php(183): sprintf('Array', 'macrossteam@gma...')
#2 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 Z:\home\kohana\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 Z:\home\kohana\www\application\classes\myclass.php(53): Email::send('qwe123452@mail....', 'macrossteam@gma...', '???????????????...', '???????????????...', false)
#5 Z:\home\kohana\www\application\classes\Controller\registration.php(29): Myclass::email_send()
#6 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-05-05 02:22:35 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '123' for key 'PRIMARY' [ INSERT INTO `regcodetable` (`email`, `password`, `r_code`) VALUES ('123', 'a0d7817ec1cfa8b5a5cb3a72c6e6966bb70a93489ca45e19462779c1c53228db', 738035) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 02:22:35 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\registration.php(25): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\registration.php(25): Model_Registration->reg_insert('123', 'a0d7817ec1cfa8b...')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 02:23:21 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 183 ] in :
2013-05-05 02:23:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\kohana\...', 183, Array)
#1 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Transport\MailTransport.php(183): sprintf('Array', 'macrossteam@tex...')
#2 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 Z:\home\kohana\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 Z:\home\kohana\www\application\classes\myclass.php(53): Email::send('qwe123452@mail....', 'macrossteam@tex...', '???????????????...', '???????????????...', false)
#5 Z:\home\kohana\www\application\classes\Controller\registration.php(29): Myclass::email_send()
#6 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in :
2013-05-05 11:13:39 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '123' for key 'PRIMARY' [ INSERT INTO `regcodetable` (`email`, `password`, `r_code`) VALUES ('123', '6d764b8d6518713462f1185f94c915e01ee57c2e6be1b32268ec5b323e63aee4', 69052) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 11:13:39 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\registration.php(40): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\registration.php(25): Model_Registration->reg_insert('123', '6d764b8d6518713...')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 11:13:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Myclass::email_send() ~ APPPATH\classes\Controller\registration.php [ 29 ] in :
2013-05-05 11:13:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 11:13:57 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'fijsdgvsdnlg' for key 'PRIMARY' [ INSERT INTO `regcodetable` (`email`, `password`, `r_code`) VALUES ('fijsdgvsdnlg', '6d764b8d6518713462f1185f94c915e01ee57c2e6be1b32268ec5b323e63aee4', 319730) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 11:13:57 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\registration.php(40): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\registration.php(25): Model_Registration->reg_insert('fijsdgvsdnlg', '6d764b8d6518713...')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 11:27:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\registration.php [ 21 ] in :
2013-05-05 11:27:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 11:27:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH\classes\Model\registration.php [ 22 ] in :
2013-05-05 11:27:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 11:30:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'regcode.id' in 'where clause' [ SELECT `regcode`.`email` AS `email`, `regcode`.`password` AS `password`, `regcode`.`r_code` AS `r_code` FROM `regcodetable` AS `regcode` WHERE `regcode`.`id` = '12345234' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 11:30:53 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `regcode...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(271): Kohana_ORM->find()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('12345234')
#5 Z:\home\kohana\www\application\classes\Model\registration.php(21): Kohana_ORM::factory('regcode', '12345234')
#6 Z:\home\kohana\www\application\classes\Controller\registration.php(60): Model_Registration->reg_delete('12345234')
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 11:35:19 --- CRITICAL: Kohana_Exception [ 0 ]: The r_code property does not exist in the Model_Regcode class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:699
2013-05-05 11:35:19 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('r_code', 500173)
#1 Z:\home\kohana\www\application\classes\Model\registration.php(46): Kohana_ORM->__set('r_code', 500173)
#2 Z:\home\kohana\www\application\classes\Controller\registration.php(25): Model_Registration->reg_insert('12345234', '4c3a9f39d17282c...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:699
2013-05-05 11:36:15 --- CRITICAL: Kohana_Exception [ 0 ]: The r_code property does not exist in the Model_Regcode class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:699
2013-05-05 11:36:15 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('r_code', 913931)
#1 Z:\home\kohana\www\application\classes\Model\registration.php(46): Kohana_ORM->__set('r_code', 913931)
#2 Z:\home\kohana\www\application\classes\Controller\registration.php(25): Model_Registration->reg_insert('12345234', '4c3a9f39d17282c...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:699
2013-05-05 11:37:00 --- CRITICAL: Kohana_Exception [ 0 ]: The r_code property does not exist in the Model_Regcode class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:699
2013-05-05 11:37:00 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('r_code', 487291)
#1 Z:\home\kohana\www\application\classes\Model\registration.php(46): Kohana_ORM->__set('r_code', 487291)
#2 Z:\home\kohana\www\application\classes\Controller\registration.php(25): Model_Registration->reg_insert('1445234', '6d764b8d6518713...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:699
2013-05-05 11:37:33 --- CRITICAL: Kohana_Exception [ 0 ]: The r_code property does not exist in the Model_Regcode class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:699
2013-05-05 11:37:33 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('r_code', 819439)
#1 Z:\home\kohana\www\application\classes\Model\registration.php(46): Kohana_ORM->__set('r_code', 819439)
#2 Z:\home\kohana\www\application\classes\Controller\registration.php(25): Model_Registration->reg_insert('1445234', '6d764b8d6518713...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:699
2013-05-05 11:38:45 --- CRITICAL: Kohana_Exception [ 0 ]: The r_code property does not exist in the Model_Regcode class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-05 11:38:45 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('r_code')
#1 Z:\home\kohana\www\application\classes\Model\registration.php(76): Kohana_ORM->__get('r_code')
#2 Z:\home\kohana\www\application\classes\Controller\registration.php(56): Model_Registration->reg_code_select('117853', '1445234')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:600
2013-05-05 11:52:30 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Registration::reg_delete(), called in Z:\home\kohana\www\application\classes\Controller\registration.php on line 60 and defined ~ APPPATH\classes\Model\registration.php [ 18 ] in Z:\home\kohana\www\application\classes\Model\registration.php:18
2013-05-05 11:52:30 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\registration.php(18): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\kohana\...', 18, Array)
#1 Z:\home\kohana\www\application\classes\Controller\registration.php(60): Model_Registration->reg_delete()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\registration.php:18
2013-05-05 13:31:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH\classes\Model\registration.php [ 20 ] in Z:\home\kohana\www\application\classes\Model\registration.php:20
2013-05-05 13:31:39 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\registration.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 20, Array)
#1 Z:\home\kohana\www\application\classes\Controller\registration.php(60): Model_Registration->reg_delete()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\registration.php:20
2013-05-05 13:31:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH\classes\Model\registration.php [ 21 ] in :
2013-05-05 13:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 13:55:59 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 988 ] in Z:\home\kohana\www\application\classes\Model\registration.php:8
2013-05-05 13:55:59 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\registration.php(8): Kohana_ORM->find_all()
#1 Z:\home\kohana\www\application\classes\Controller\registration.php(58): Model_Registration->reg('144502')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\registration.php:8
2013-05-05 13:56:07 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 988 ] in Z:\home\kohana\www\application\classes\Model\registration.php:8
2013-05-05 13:56:07 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\registration.php(8): Kohana_ORM->find_all()
#1 Z:\home\kohana\www\application\classes\Controller\registration.php(58): Model_Registration->reg('144502')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\registration.php:8
2013-05-05 13:56:21 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 988 ] in Z:\home\kohana\www\application\classes\Model\registration.php:8
2013-05-05 13:56:21 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Model\registration.php(8): Kohana_ORM->find_all()
#1 Z:\home\kohana\www\application\classes\Controller\registration.php(58): Model_Registration->reg('144502')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Model\registration.php:8
2013-05-05 13:56:42 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'macrossteam@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('macrossteam@gmail.com', 'macrossteam@gmail.com', '6cd4de518dda594f9fff8fbc8938c7578121d318c5630e637f4578b5e56b58f1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 13:56:42 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\registration.php(12): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\registration.php(58): Model_Registration->reg('144502')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 13:57:16 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'macrossteam@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('macrossteam@gmail.com', 'macrossteam@gmail.com', '6cd4de518dda594f9fff8fbc8938c7578121d318c5630e637f4578b5e56b58f1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-05 13:57:16 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\registration.php(12): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\registration.php(58): Model_Registration->reg('136641')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_regcode()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251