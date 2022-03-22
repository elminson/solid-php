<?php

use SomeNameSpace\EmailService;
use SomeNameSpace\Order;

class OrderService
{

	private EmailService $emailService;

	/**
	 * @param EmailService $emailService
	 */
	public function __construct(EmailService $emailService)
	{

		$this->emailService = $emailService;
	}

	/**
	 * @param Order $order
	 *
	 * @return void
	 */
	public function add(Order $order)
	: void {

		// 01. Create order code here

		// Assuming we get this from the db
		$to = "client01@gmail.com";
		$subject = "Order #2022-123456";
		$body = "New order added";

		// 01. Create order code here
		$this->emailService->send($to, $subject, $body);

	}

}