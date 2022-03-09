<?php

namespace App\Notifications\Customer;

use App\Models\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\AfricasTalking\AfricasTalkingChannel;
use NotificationChannels\AfricasTalking\AfricasTalkingMessage;

class PaymentApprovalRequestNotification extends Notification implements ShouldQueue
{
    use Queueable;
 
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public Payment $payment){}

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
        $Url = $this->paymentUrl();

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
        return "Kariinvestment: [Payment Approval Request] 
                \n A payment approval has been requested, 
                \n click the link below to begin approval process 
                \n {$url}";
    }

    /**
     * Get the verification URL for the given notifiable.
     * @return string
     */
    protected function paymentUrl()
    {
        return route('admin.investment.payments.index');
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $user = $this->payment->customer;

        return (new MailMessage)
            ->subject('Kariinvestment: [Payment Approval Request]')
            ->greeting("Hello!")
            ->line("A payment approval has been requested by { $user->full_name } - { $user->email }")
            ->action('View payment', $this->paymentUrl());
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
            'payment_id' => $this->payment->id,
            'payment_refcode' => $this->payment->refcode,
        ];
    }
}
