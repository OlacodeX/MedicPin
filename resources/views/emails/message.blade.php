@component('mail::message')
#Dear {{ $data['receiver_name']}}, You've got a new message.

<p>{{ auth()->user()->u_name}} sent you the following message:</p>
<p>{!! $data['message']!!}</p>
<p>Kindly head to your inbox to reply.</p>
<br><br>
<p>Warm Regards,</p>
<p><strong>The {{config('app.name')}} Team</strong></p>
<small>Have any complaint regarding our service or activities on our platform? Contact us on <a href="mailto:support@medicpin.com?Subject=Hello MedicPin, I Have an Enquiry">support@medicpin.com</a></small>
@endcomponent