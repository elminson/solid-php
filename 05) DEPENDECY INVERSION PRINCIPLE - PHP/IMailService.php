<?php

interface IMailService
{
	function send(): void;
}

class MailChimpService implements IMailService
{
	public function send(): void
	{
		// Todo: código para enviar el correo
	}
}

class SendGridService implements IMailService
{
	public function send(): void
	{
		// Todo: código para enviar el correo
	}
}