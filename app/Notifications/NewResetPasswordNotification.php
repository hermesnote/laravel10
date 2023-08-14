<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewResetPasswordNotification extends Notification
{
    use Queueable;

    public $token;

    /**
     * Create a new notification instance.
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    // /**
    //  * Get the notification's delivery channels.
    //  *
    //  * @return array<int, string>
    //  **/

    public function via(object $notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable)
    {
        return (new MailMessage)
            ->line('我們已收到您重置密碼的要求，請點擊下方按鈕繼續重置密碼。')
            ->action('重置密碼', url('reset-password', $this->token))
            ->line('這個重置按鈕有效時間為60分鐘。')
            ->line('若您並未要求重置密碼，則不需理會此信件。');
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
