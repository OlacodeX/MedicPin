@component('mail::message')
#Dear {{ $data['receiver_name']}}, You've got a new message.
@php
    $hospital = App\hospitals::where('user_id',auth()->user()->id)->first();
@endphp
<p>Dr. {{auth()->user()->name}} from {{$hospital->h_name}} {{$hospital->h_type}} hospital sent you the following message:</p>
<p>{!! $data['message']!!}</p>
<p>Kindly head to your inbox to reply.</p>
<br><br>
<p>Warm Regards,</p>
<p><strong>The {{config('app.name')}} Team</strong></p>
<small>Have any complaint regarding our service or activities on our platform? Contact us on <a href="mailto:support@medicpin.com?Subject=Hello MedicPin, I Have an Enquiry">support@medicpin.com</a></small>
@endcomponent