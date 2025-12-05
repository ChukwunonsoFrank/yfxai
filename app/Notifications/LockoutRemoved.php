<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LockoutRemoved extends Notification implements ShouldQueue
{
  use Queueable;

  public $tries = 5;

  /**
   * Create a new notification instance.
   */
  public function __construct(public string $name)
  {
    //
  }

  /**
   * Determine which queues should be used for each notification channel.
   *
   * @return array<string, string>
   */
  public function viaQueues(): array
  {
    return [
      'mail' => 'notifications',
    ];
  }

  /**
   * Get the notification's delivery channels.
   *
   * @return array<int, string>
   */
  public function via(object $notifiable): array
  {
    return ['mail'];
  }

  /**
   * Get the mail representation of the notification.
   */
  public function toMail(object $notifiable): MailMessage
  {
    return (new MailMessage)
      ->subject('Strategy Reset Complete')
      ->greeting("Hi " . $this->name . ',')
      ->line("The trading cycle has been reset and ready for new trades. You can now initiate a new trade on the dashboard.");
  }

  /**
   * Get the array representation of the notification.
   *
   * @return array<string, mixed>
   */
  public function toArray(object $notifiable): array
  {
    return [
      //
    ];
  }
}
