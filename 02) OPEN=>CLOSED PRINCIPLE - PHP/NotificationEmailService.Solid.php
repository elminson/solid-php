<?php

class NotificationEmailService implements INotification
{
	private string $to;
	private string $subject;

	public function __construct(string $to, string $subject)
	{
		$this->to = $to;
		$this->subject = $subject;
	}

	public function send() : void
	{
		// Lógica para enviar la ntoification por e-mail
	}
}