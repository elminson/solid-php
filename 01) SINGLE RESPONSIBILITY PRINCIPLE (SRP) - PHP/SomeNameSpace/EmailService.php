<?php

namespace SomeNameSpace;

class EmailService
{

	/**
	 * @param string $to
	 * @param string $subject
	 * @param string $msg
	 *
	 * @return void
	 */
	public function send(string $to, string $subject, string $msg)
	{

		mail($to, $subject, $msg);
	}
}