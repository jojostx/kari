<?php

namespace App\Notifications\Customer;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\AfricasTalking\AfricasTalkingChannel;
use NotificationChannels\AfricasTalking\AfricasTalkingMessage;

class PayoutCreatedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', AfricasTalkingChannel::class];
    }

    /**
     * Get the SMS representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return AfricasTalkingMessage
     */
    public function toAfricasTalking($notifiable)
    {
        $Url = $this->payoutUrl();

        $message = $this->buildSMSMessage($Url, $notifiable);

        return (new AfricasTalkingMessage())
            ->content($message);
    }

    /**
     * Get the verify SMS notification message for the given URL.
     *
     * @param  string  $url
     * @param  mixed  $notifiable
     * 
     * @return string
     */
    protected function buildSMSMessage($url, $notifiable)
    {
        $name = (string) $notifiable->first_name ?? '';

        return "Kariinvestment: [Payment Approved & Subscription Created] 
                \n Hello {$name}, 
                \n Your Payment & Subscription has been approved 
                \n {$url}";
    }

    /**
     * Get the verification URL for the given notifiable.
     * @return string
     */
    protected function payoutUrl()
    {
        return route('dashboard');
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
            ->subject('Kariinvestment: [Payout Created]')
            ->greeting("Hello,")
            ->line('You have a new Payout that you can withdraw')
            ->action('View Payout', $this->payoutUrl())
            ->line('Thank you for using our application!');
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
