<?php

class OrderService
{

	/**
	 * Nos piden cambiar de proveedor
	 */

	/**
	 * @var MailChimpService
	 */
	private MailChimpService $mailService;

	public function __constructor (MailChimpService $mailService)
	{
		$this->mailService = $mailService;
	}

	public function create(Order $order) : void
	{
		// ToDo: código para crear la orden

		// Enviar notificación de la orden creada
		$this->mailService.Send();
	}
}
