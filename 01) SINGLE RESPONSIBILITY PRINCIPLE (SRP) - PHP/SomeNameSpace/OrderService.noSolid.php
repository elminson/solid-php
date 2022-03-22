<?php

use SomeNameSpace\Order;

class OrderService
{

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

		// 02. Notify client
		$this->sendCustomerNotification($to, $subject, $body);

	}


	/**
	 * @param string $to
	 * @param string $subject
	 * @param string $msg
	 *
	 * @return void
	 */
	public function sendCustomerNotification(string $to, string $subject, string $msg)
	{

		mail($to, $subject, $msg);
	}
}