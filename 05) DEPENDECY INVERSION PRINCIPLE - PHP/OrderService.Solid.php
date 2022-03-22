<?php


class OrderService
{
	private IMailService $mailService;

	public function __constructor (IMailService $mailService)
	{
		$this->mailService = $mailService;
	}

	public function create(Order $order) : void
	{
		// ToDo: código para crear la orden

		// Enviar notificación de la orden creada
		$this->mailService->send();
	}
}