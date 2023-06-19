<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function getProfile(){
        $user = User::findOrFail(Auth::user()->id);

        return view('auth.profile',compact('user'));
    }

    public function getUpdatePage(){
        $user = User::findOrFail(Auth::user()->id);

        return view('auth.edit-profile',compact('user'));
    }

    public function updateProfile(Request $request){

        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'fullname' => ['required', 'string', 'max:510'],
            'dob' => ['required', 'date', 'before_or_equal:'.now()->subYears(18)->format('Y-m-d')],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = User::findOrFail(Auth::user()->id);

        $fullName = $request->fullname;
        $splitName = explode(' ', $fullName, 2);
        $first_name = $splitName[0];
        $last_name = !empty($splitName[1]) ? $splitName[1] : '';

        $user->update([
            'username' => $request->username,
            'firstname' => $first_name,
            'lastname' => $last_name,
            'dob' => $request->dob,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect(route('profilePage'));
    }

    public function getHistoryPage(){

        return view('customer-history',[
            'orders' => Order::where('customer_id','=',Auth::user()->id)->filter(request(['searchAssistant']))->get()
        ]);
    }

    public function cancelOrder($id){
        $order = Order::findOrFail($id);

        //buat cek apakah yg akses itu memang si assistant yang dapet order tersebut
        if($order->customer_id != Auth::user()->id || $order->status == 'Done'){
            return redirect(route('customerHistory'));
        }

        $order->update([
            'status' => 'Cancelled'
        ]);

        return redirect(route('customerHistory'));
    }
}
