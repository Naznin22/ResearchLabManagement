<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class selectionDone extends Notification 
{
    use Queueable;
    public  $mail_data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    //public function __construct($mail_data)
    public function __construct()
    {
        //
        //$this->mail_data =  (object)$mail_data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
        // ->greeting($this->mail_data->greeting)
        // ->from('nazninhaque7622@gmail.com', 'Sample')
        // ->subject($this->mail_data->mail_subject)
        // ->line($this->mail_data->mail_message)
        // ->action($this->mail_data->button_text, url($this->mail_data->message_link))
        // ->line($this->mail_data->mail_footer);
        ->greeting('Dear, You are selected')
        ->line('You are selected')
    ->action('Go back to site','/home');
        //->line('Regards, Research Lab Management')
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
