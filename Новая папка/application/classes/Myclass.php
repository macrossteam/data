<?php defined('SYSPATH') or die('No direct script access.');

class  Myclass	{
	public static function send_mail($to, $from, $subject,$message)
		{
			try{
				$count = Email::send($to,$from,$subject,$message, $html = false);
				return TRUE;
			}
			catch (Exception $e)
			{
				echo $e->getMessage();
				return FALSE;
			}
		}
		}