<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormPekerjaanController extends Controller
{
    public function getFormPage(){
        return view('form-kerja');
    }

    public function getPaymentPage($id){
        $order = Order::findOrFail($id);

        if($order->customer_id != Auth::user()->id){
            return abort(404);
        }
        //utk cek apakah udh pernah ada payment buat order dengan id tersebut
        $payment = Payment::where('order_id','=',$order->id)->get();

        if(!$payment->isEmpty()){
            return abort(404);
        }

        $fDate = $order->startDate;
        $lDate = $order->endDate;
        $datetime1 = new DateTime($fDate);
        $datetime2 = new DateTime($lDate);
        // dd($datetime2);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        $paymentAmount = 125000 * $days;

        return view('payment-page', compact('order','days','paymentAmount'));
    }

    public function getPaymentFinal(){
        return view('payment-final');
    }
}
