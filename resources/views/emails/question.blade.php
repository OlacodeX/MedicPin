@component('mail::message')
#Hi there,
<p>{{ auth()->user()->role}} {{ auth()->user()->name}} asked the following question on the forum:</p>
<p>{!! $data['question']!!}</p>
<p>We would appreciate your professional response.</p>
@php
    $question = App\Questions::where('question', $data['question'])->first();
@endphp
<a href="{{config('app.url')}}/questions/{{$question->id}}">Follow this link to answer.</a>
<br><br>
<p>Warm Regards,</p>
<p><strong>The {{config('app.name')}} Team</strong></p>
<small>Have any complaint regarding our service or activities on our platform? Contact us on <a href="mailto:support@medicpin.com?Subject=Hello MedicPin, I Have an Enquiry">support@medicpin.com</a></small>
@endcomponent