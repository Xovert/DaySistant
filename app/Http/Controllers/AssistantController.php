<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssistantController extends Controller
{
    public function getAssistantHome(){
        $assistant_id = Auth::user()->id;
        $orders = Order::where('assistant_id','like',$assistant_id)->where('status','like','Not Accepted')->get();
        $in_progress = Order::where('assistant_id','like',$assistant_id)->where('status','like','In Progress')->get();
        
        return view('assistant',compact('orders','in_progress'));
    }

    public function selectOrder($order_id){
        $orderSelect = Order::findOrFail($order_id);

        //buat cek apakah yg akses itu memang si assistant yang dapet order tersebut
        if($orderSelect->assistant_id != Auth::user()->id){
            return redirect(route('assistantHome'));
        }

        $fDate = $orderSelect->startDate;
        $lDate = $orderSelect->endDate;
        $datetime1 = new DateTime($fDate);
        $datetime2 = new DateTime($lDate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        $assistant_id = Auth::user()->id;
        $orders = Order::where('assistant_id','like',$assistant_id)->where('status','like','Not Accepted')->get();
        $in_progress = Order::where('assistant_id','like',$assistant_id)->where('status','like','In Progress')->get();

        return view('assistant-select',compact('orderSelect','days','orders','in_progress'));
    }

    // public function acceptOrder($order_id){
    //     $order = Order::findOrFail($order_id);

    //     $order->update([
    //         'status' => 'In Progress'
    //     ]);

    //     return redirect(route('assistantHome'));
    // }

    // public function changeAssistant($order_id){
    //     $id = Auth::user()->id;
        
    //     do{
    //         $assistant = User::inRandomOrder()->first();
    //     } while($assistant->id == $id || $assistant->role == 'User');

    //     $order = Order::findOrFail($order_id);

    //     $order->update([
    //         'assistant_id' => $assistant->id
    //     ]);
        
    //     return redirect(route('assistantHome'));
    // }

    public function respondOrder($order_id, Request $request){
        $order = Order::findOrFail($order_id);

        //buat cek apakah yg akses itu memang si assistant yang dapet order tersebut
        if($order->assistant_id != Auth::user()->id){
            return redirect(route('assistantHome'));
        }

        switch($request->submitBtn){
            case 'Accept':
                $order->update([
                    'status' => 'In Progress'
                ]);

                return redirect(route('assistantHome'));
            break;

            case 'Decline':
                $id = Auth::user()->id;
        
                do{
                    $assistant = User::inRandomOrder()->first();
                } while($assistant->id == $id || $assistant->role == 'User');

                $order->update([
                    'assistant_id' => $assistant->id
                ]);
                
                return redirect(route('assistantHome'));
            break;

            case 'Done':
                $order->update([
                    'status' => 'Done'
                ]);
                
                return redirect(route('assistantHome'));
            break;
        }
    }

    public function getHistoryPage(){

        return view('history',[
            'orders' => Order::where('assistant_id','=',Auth::user()->id)->where('status','!=','Not Accepted')->filter(request(['search']))->get()
        ]);
    }

    public function cancelOrder($id){
        $order = Order::findOrFail($id);

        //buat cek apakah yg akses itu memang si assistant yang dapet order tersebut
        if($order->assistant_id != Auth::user()->id || $order->status == 'Done' || $order->status == 'Not Accepted'){
            return redirect(route('assistantHistory'));
        }

        $order->update([
            'status' => 'Cancelled'
        ]);

        return redirect(route('assistantHistory'));
    }
}
