@component('mail::message')
@php
    $user = App\User::where('pin', auth()->user()->pin)->first();
@endphp
@if (empty($user->h_id))
# Hi,
<p>This is to notify you that patient {{auth()->user()->name}} has invited you to visit them on {{ $data['date']}}.</p>
@endif
@if (!empty($user->h_id))
@php
    $user = App\User::where('pin', auth()->user()->pin)->first();
    $hospital = App\hospitals::where('id', $user->h_id)->first();
@endphp
# Hi,
 <p>This is to notify you that patient {{auth()->user()->name}} from {{$hospital->h_name}} {{$hospital->h_type}} hospital located at {{$hospital->h_add}} has invited you to visit them on {{ $data['date']}}.</p>
 @endif
 <p>Please come along with a copy of this message.</p>
<br><br>
<p>Warm Regards,</p>
<p><strong>The Team at {{config('app.name')}}</strong></p>
<small>Have any complaint regarding our service or activities on our platform? Contact us on <a href="mailto:support@medicpin.com?Subject=Hello MedicPin, I Have an Enquiry">support@medicpin.com</a></small>
@endcomponent