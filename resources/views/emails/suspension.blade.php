@component('mail::message')
@php
    $hmo = App\User::where('id', auth()->user()->id)->first();
@endphp
# Hi there,
<p>This is to notify you that your account has been suspended.</p>  <br>
<p>This might be because you have violated one or more of our policies.</p>
  <!---   Below are the patient's details: </p>
 <p>Name: {{auth()->user()->name}}</p>
 <p>Email: {{auth()->user()->email}}</p>
 <p>MedicPin: {{auth()->user()->pin}}</p>---->
 <p>You might want to read about our <a href="./terms">Terms</a> and <a href="./policy">Policy</a> to better understand what you might have done.</p>
 <p>Kindly contact us through one of our contact channels for further details.</p>
<br><br>
<p>Warm Regards,</p>
<p><strong>The Team at {{config('app.name')}}</strong></p>
<small>Have any complaint regarding our service or activities on our platform? Contact us on <a href="mailto:support@medicpin.com?Subject=Hello MedicPin, I Have an Enquiry">support@medicpin.com</a></small>
@endcomponent