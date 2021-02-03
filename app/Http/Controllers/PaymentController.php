<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payments;
use App\Bills;

class PaymentController{
   
    public function Transaction(Request $request){ /** Prepare the post data to be sent via request
        * @param array data
        * @return post response
        */

       $data1 = [

           'amount' => ($request->input('amount')) * 100,
           'address' => ($request->input('address')),
           'item' => ($request->input('item')),

           'user' => auth()->user()->name,

           'email' => auth()->user()->email,

           'callback_url' => '/paid'
           ];

           /** Initiate the client for url's */
           $curl = curl_init();

           /** Curl array values to be passed */
           curl_setopt_array($curl, array(

           /** The url to visit and get response from */
           CURLOPT_URL => "https://api.paystack.co/transaction/initialize",

           /** The curl options should have return transfer values */
           CURLOPT_RETURNTRANSFER => true,

           /** Specify the encoding if necessary: omitted here */
           CURLOPT_ENCODING => "",

           /** The maximum redirect the link can have */
           CURLOPT_MAXREDIRS => 10,

           /** The time out for the load time can be set here */
           CURLOPT_TIMEOUT => 30000,

           /** The version for the curl can be set here */
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

           /** The request being sent to the endpoint is a POST request */
           CURLOPT_CUSTOMREQUEST => "POST",

           /** The fields returned should be json encoded */
           CURLOPT_POSTFIELDS => json_encode($data1),

           CURLOPT_HTTPHEADER => array(

           /** The headers for the curl array can be set here: Auth_key */

           "accept: */*",

           "authorization: Bearer sk_test_e09c42e4832c94d669d14a1d0d79de75dc6d72b7",

           "accept-language: en-US,en;q=0.8",

           "content-type: application/json",

           ),

           ));

           /** The response gotten from the client for urls */
           $response = curl_exec($curl);

           /** If errors exist then return the error messages */
           $err = curl_error($curl);

           /** Close the connection to the end point once done */
           curl_close($curl);

           /** If there are errors then echo them out  */
           if ($err) {

           return redirect()->back()->with("cURL Error #:" . $err);

           } else {

           /** This should send the data from the Callback with transaction details */
           $trans = json_decode($response, true);
           return redirect($trans['data']['authorization_url']);

           }
       }


    /** 
    * Controller method to handle response from paystack after payment
    * @param trxref
    */
    public function Callback(){
        //$getLocation = Order::orderBy('created_at', 'desc')->where('user',auth()->user()->name)->limit(1)->get();

/** Initialize the client for urls */
$curl = curl_init();

/** Check for a reference and return else make empty */
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
die('No reference supplied');
}

/** Set the client for url's array values for the Curl's */
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
CURLOPT_RETURNTRANSFER => true,

/** Set the client for url header values passed */
CURLOPT_HTTPHEADER => [
"accept: application/json",
"authorization: Bearer sk_test_e09c42e4832c94d669d14a1d0d79de75dc6d72b7",
"cache-control: no-cache"
],
));

/** The response should be executed if successful */
$response = curl_exec($curl);

/** If there's an error return the error message */
$err = curl_error($curl);

if($err){
print_r('Api returned error'. $err);
}

/** The transaction details and stats would be returned */
$trans = json_decode($response);
if(!$trans->status){
die('Api returned Error'. $trans->message);
}

/** If the transaction stats are successful snd to DB */
if('success' == $trans->data->status){
    if (!empty($trans->data->item)) {
        $payment = new Orders;
        $payment->channel = $trans->data->channel;
        $payment->status  = $trans->data->status;
        $payment->item  = $trans->data->item;
        $payment->address  = $trans->data->address;
        $payment->amount   = ($trans->data->amount)/100;
        $payment->reference = $trans->data->reference;
        $payment->transaction_date = $trans->data->transaction_date;
        $payment->user_pin = auth()->user()->pin;
        $payment->user_email = auth()->user()->email;
        $payment->save();  
    } else {
    
$payment = new Payments;
$payment->channel = $trans->data->channel;
$payment->status  = $trans->data->status;
$payment->amount   = ($trans->data->amount)/100;
$payment->reference = $trans->data->reference;
$payment->transaction_date = $trans->data->transaction_date;
$payment->user_pin = auth()->user()->pin;
$payment->user_email = auth()->user()->email;
$payment->save();  
$bill_status = Bills::where('patient_pin', auth()->user()->pin)->where('status', 'Unpaid')->get();
foreach ($bill_status as $bill_status) {
    $bill_status->status = 'Paid';
    $bill_status->save();
}

}
}

/** Finally return the callback view for the end user */
return redirect()->back();
}
}