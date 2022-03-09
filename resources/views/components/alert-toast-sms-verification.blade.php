@if (session('status'))  
<x-alert-toast>
  <p>
    @switch(session('status'))
        @case('verification-sms-not-sent')
                Unable to send phone number verification SMS
            @break
        @case('verification-sms-sent')
                phone number verification SMS sent
            @break
        @default
            ''
    @endswitch
  </p>
</x-alert-toast>
@endif
