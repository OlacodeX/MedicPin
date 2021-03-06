@component('mail::message')
#Hi there,
@php
    $question = App\Questions::where('question', $data['question'])->first();
@endphp
@if ($question->asker_identity == 'No')
   @php
       $name = 'Anonymous';
   @endphp 
<p>An {{ $name}} asked the following question on the forum:</p>
@else
    
<p>{{ auth()->user()->role}} {{ auth()->user()->name}} asked the following question on the forum:</p>
@endif
<p>{!! $data['question']!!}</p>
<p>We would appreciate your professional response.</p>
<a href="{{config('app.url')}}/questions/{{$question->id}}">Follow this link to answer.</a>
<br><br>
<p>Warm Regards,</p>
<p><strong>The {{config('app.name')}} Team</strong></p>
<small>Have any complaint regarding our service or activities on our platform? Contact us on <a href="mailto:support@medicpin.com?Subject=Hello MedicPin, I Have an Enquiry">support@medicpin.com</a></small>
@endcomponent