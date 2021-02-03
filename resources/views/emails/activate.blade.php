@component('mail::message')
@php
    $hmo = App\User::where('id', auth()->user()->id)->first();
@endphp
# Hi there,
<p>This is to notify you that your account has been activated.</p>  <br>
<p>Thanks for helping us keep our platform safe.</p>
  <!---   Below are the patient's details: </p>
 <p>Name: {{auth()->user()->name}}</p>
 <p>Email: {{auth()->user()->email}}</p>
 <p>MedicPin: {{auth()->user()->pin}}</p>---->
<br><br>
<p>Warm Regards,</p>
<p><strong>The Team at {{config('app.name')}}</strong></p>
<small>Have any complaint regarding our service or activities on our platform? Contact us on <a href="mailto:support@medicpin.com?Subject=Hello MedicPin, I Have an Enquiry">support@medicpin.com</a></small>
@endcomponent