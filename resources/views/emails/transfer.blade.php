@component('mail::message')
# Hello Dr {{ $data['from']}},

 <p>This is to notify you that patient {{ $data['name']}} with medicpin {{ $data['pin']}} has been 
    successfully transferred to a new doctor.</p>
<br><br>
<p>Warm Regards,</p>
<p><strong>The Team at {{config('app.name')}}</strong></p>
@endcomponent