<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TalentAcquisitionNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $talentAcquisition;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($talentAcquisition)
    {
        $this->talentAcquisition = $talentAcquisition;
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
       ->subject($this->talentAcquisition['subject'])
       ->view('email.talent-acquisition', ['talentAcquisition' => $this->talentAcquisition]);
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
