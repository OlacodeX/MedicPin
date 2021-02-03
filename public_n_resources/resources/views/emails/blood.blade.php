@component('mail::message')
# Hello MedicPin,
 <p>This is to notify you of a request from {{ $data['name']}}.</p>
 <p>See request detail below:</p>
 @if ( $data['b_group'] == '1500')
 <p><b>Blood Group </b> O+</p>  
 @endif
 @if ( $data['b_group'] == '1600')
 <p><b>Blood Group </b> O-</p>  
 @endif
 @if ( $data['b_group'] == '2000')
 <p><b>Blood Group </b> A+</p>  
 @endif
 @if ( $data['b_group'] == '2500')
 <p><b>Blood Group </b> A-</p>  
 @endif
 @if ( $data['b_group'] == '2100')
 <p><b>Blood Group </b> AB+</p>  
 @endif
 @if ( $data['b_group'] == '5000')
 <p><b>Blood Group </b> AB-</p>  
 @endif
 
 <p><b>Quantity </b> {{ $data['qty']}}</p>
 <p><b>Hospital Name </b> {{ $data['h_name']}}</p>
 <p><b>Hospital Address </b> {{ $data['add']}}</p>
 <p><b>Phone Number </b> <a href="tel:{{ $data['number']}}">{{ $data['number']}}</a></p>
 <p><b>Contact Email </b> {{ $data['email']}}</p>
 <p><b>Amount Payable </b> &#8358;{{ $data['result']}}</p>
<p>Cheers To Saving More Lives.</p>
<br>
<p>Warm Regards,</p>
<p><strong>The Team at {{config('app.name')}}</strong></p>
@endcomponent