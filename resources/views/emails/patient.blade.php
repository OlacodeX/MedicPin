
@component('mail::message')
@if (!empty($data['name']))
# Hello <strong>{{ $data['name']}},</strong>
@else
# Hello,
@endif
<p>We just want to notify you that Dr. {{auth()->user()->name}} has created a record for you here on Medicpin. </p>
 #Further steps
 <p>To complete your account set up, click the button below</p>
 <p class="text-center"><a href="https://shielded-river-00274.herokuapp.com/account_set_up" class="btn btn-info">Continue Here</a><br>or copy and paste the link below in your browser</p>
 https://shielded-river-00274.herokuapp.com/account_set_up
<br><br>
<p>Warm Regards,</p>
<p><strong>The Team at {{config('app.name')}}</strong></p>
<small>Have any complaint regarding our service or activities on our platform? Contact us on <a href="mailto:support@medicpin.com?Subject=Hello MedicPin, I Have an Enquiry">support@medicpin.com</a></small>
@endcomponent