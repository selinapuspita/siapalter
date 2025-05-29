<?php if(!defined('BASEPATH')) exit('Hack attempt?');
if ( ! function_exists('mailer'))
{
	function mailer($subject,$message,$from,$to,$bcc,$cc='')
	{

		$CI =& get_instance();
		$CI->load->library('email');

		$CI->email->from($from);
		$CI->email->to($to);

		if($cc!='')
		$CI->email->cc($cc);

		if($bcc!='')
		$CI->email->bcc($bcc);

		$CI->email->subject($subject);

		$CI->email->message($message);
		$CI->email->send();


	}
}

