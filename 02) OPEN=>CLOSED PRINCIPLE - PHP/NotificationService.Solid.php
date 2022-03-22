<?php

class NotificationService
{

	/**
	 * Example
	 * $notifications = [
	 * 		new NotificationEmailService("customer@email.com", "El motivo del correo"),
	 * 		new NotificationSmsService("+05199999", "El asunto del mensaje de texto")
	 * 		new NotificationSlackService("#channel", "El asunto del mensaje de texto")
	 * ];
	 * $notificationService = new NotificationService();
	 * $notificationService->send($notifications);
	 */


	/**
	 * @param array $notifications
	 *
	 * @return void
	 */
	public function send(array $notifications)
	: void {

		foreach ($notifications as $notification) {
			$notification->send();
		}
	}
}