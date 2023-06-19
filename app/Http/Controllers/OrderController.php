<?php

namespace App\Http\Controllers;

use App\Models\Assistant;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function createOrder(Request $request){

        $request->validate([
            'dateStart' => ['required', 'date', 'after_or_equal:'.now()->format('d-m-Y')],
            'jumlahHari' => ['required', 'integer', 'min:1'],
            'specification' => ['required', 'string', 'in:Asisten Pribadi, Entri Data, Media Sosial, Customer Service, Phone & Emailing'],
            'description' => ['required', 'max:500']
        ]);

        do{
            $assistant = User::inRandomOrder()->first();
        } while($assistant->role == "User");

        $jumlahHari = $request->jumlahHari;
        // dd($request->dateStart);
        $dateStart = Carbon::createFromFormat('Y-m-d', $request->dateStart);
        $dateEnd = $dateStart->addDays($jumlahHari);

        $order = Order::create([
            'customer_id' => Auth::user()->id,
            'assistant_id' => $assistant->id,
            'orderDate' => Carbon::now(),
            'startDate' => $request->dateStart,
            'endDate' => $dateEnd,
            'specification' => $request->specification,
            'description' => $request->description
        ]);

        return redirect(route('paymentPage',['id'=>$order->id]));
    }

    public function createPayment($id){
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
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        $paymentAmount = 125000 * $days;

        // dd(Auth::user()->id);

        Payment::create([
            'order_id' => $order->id,
            'customer_id' => Auth::user()->id,
            'paymentDate' => Carbon::now(),
            'paymentAmount' => $paymentAmount,
        ]);

        return redirect(route('paymentFinal'));
    }

}
