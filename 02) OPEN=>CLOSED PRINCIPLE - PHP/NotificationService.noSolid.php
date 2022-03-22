<?php

class NotificationService
{

	/**
	 * @param array $notifications
	 *
	 * @return send
	 */
	public function send(array $notifications)
	: send {

		foreach ($notifications as $notification) {
			if ($notification->type === "sms") {
				$this->endbySMS($notification->phoneNumber, $notification->subject);
			}

			if ($notification->type === "email") {
				$this->sendbyEmail($notification->email, $notification->subject);
			}
		}
	}

	/**
	 * @param string $phoneNumber
	 * @param string $subject
	 *
	 * @return void
	 */
	private function sendbySMS(string $phoneNumber, string $subject)
	{
		// Logica para mandar el SMS
	}

	/**
	 * @param string $to
	 * @param string $subject
	 *
	 * @return void
	 */
	private function sendbyEmail(string $to, string $subject)
	{
		// Logica para mandar el email
	}

	/**
	 * @param string $channel
	 * @param string $subject
	 *
	 * @return void
	 */
	private function sendbySlack(string $channel, string $subject)
	{
		// Logica para mandar a slack
	}
}