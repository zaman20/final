<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Rent;
use App\Models\Sell;

class AppController extends Controller
{
    public function checkLogin(Request $request){
        $name = $request->has('user_name')?$request->get('user_name'):'';
        $pass = $request->has('password')?$request->get('password'):'';

            if($name=="seller" && $pass=="seller"){
                return redirect('/dashboard');
            }
            else{
                return back()->with('msg','Wrong Details');
            }
           
    }
   
    public function dashboard(){
        $rent = Rent::count();
        $sell = Sell::count();
        $apt  = Appointment::count();
        return view('dashboard',compact('rent','sell','apt'));
    }

    public function rent(){
        $datas = Rent::all();
        return view('rent',compact('datas'));
    }
    public function sell(){
        $datas = Sell::all();
        return view('sell',compact('datas'));
    }
    public function newRent(){
        return view('add-rent');

    }
    public function interest(){
        return view('buyer-interest');

    }
    public function addRent(Request $request){
        $buyer_name =$request->has('buyer_name')?$request->get('buyer_name'):'';
        $buyer_phone = $request->has('buyer_phone')?$request->get('buyer_phone'):'';
        $house = $request->has('house')?$request->get('house'):'';
        $montly_cost = $request->has('monthly_cost')?$request->get('monthly_cost'):'';

        Rent::insert([
            'buyer_name'=>$buyer_name,
            'buyer_phone'=>$buyer_phone,
            'house'=>$house,
            'monthly_cost'=>$montly_cost,
        ]);

        return back()->with('msg','New Rent Added');
    }

    public function newSell(){
        return view('add-sell');
    }

    public function addSell(Request $request){
        $buyer_name =$request->has('buyer_name')?$request->get('buyer_name'):'';
        $buyer_phone = $request->has('buyer_phone')?$request->get('buyer_phone'):'';
        $house = $request->has('house')?$request->get('house'):'';
        $paid = $request->has('paid')?$request->get('paid'):'';

        Sell::insert([
            'buyer_name'=>$buyer_name,
            'buyer_phone'=>$buyer_phone,
            'house'=>$house,
            'paid'=>$paid,
        ]);

        return back()->with('msg','House Sold');
    }

    public function appointment(){
        $datas = Appointment::all();
        return view('appointment',compact('datas'));
    }
    public function newApt(){
        return view('add-appointment');
    }
    public function addApt(Request $request){
        $buyer_name =$request->has('buyer_name')?$request->get('buyer_name'):'';
        $buyer_phone = $request->has('buyer_phone')?$request->get('buyer_phone'):'';
        $buyer_email = $request->has('buyer_email')?$request->get('buyer_email'):'';
        $apt_date = $request->has('apt_date')?$request->get('apt_date'):'';
        $apt_time = $request->has('apt_time')?$request->get('apt_time'):'';

        Appointment::insert([
            'buyer_name'=>$buyer_name,
            'buyer_phone'=>$buyer_phone,
            'buyer_email'=>$buyer_email,
            'apt_date'=>$apt_date,
            'apt_time'=>$apt_time,
        ]);

        return back()->with('msg','New Appointment Added');
    }
}
