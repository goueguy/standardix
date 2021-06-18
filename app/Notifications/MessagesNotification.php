<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessagesNotification extends Notification
{
    use Queueable;
    protected $message_id;
    protected $message_label;
    protected $message_content;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message_id,$message_label,$message_content)
    {
        $this->message_id = $message_id;
        $this->message_label = $message_label;
        $this->message_content = $message_content;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via()
    {
        return ['database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray()
    {
        return [
            'message_id'=>$this->message_id,
            'message_label'=>$this->message_label,
            'message_content'=>$this->message_content
        ];
    }
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'message_id'=>$this->message_id,
            'message_label'=>$this->message_label,
            'message_content'=>$this->message_content
        ]);
    }
}
