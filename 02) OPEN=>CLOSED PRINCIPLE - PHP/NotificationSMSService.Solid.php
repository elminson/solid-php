<?php

class NotificationSMSService implements INotification
{
	private string $phoneNumber;
	private string $subject;

	public function __construct(string $to, string $subject)
	{
		$this->phoneNumber = $to;
		$this->subject = $subject;
	}

	public function send() : void
	{
		// Lógica para enviar la ntoification por e-mail
	}
}