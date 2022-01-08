<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Info;
use Session;


class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shipping_dashboard()
    {
        if(Auth::check()){
            // get current users address and phone number
            
            $userInfo = Info::where('User_Email', Auth::user()->email)->get();
            
            if($userInfo->isNotEmpty()) {
                return view('Members.shipping_data', [
                    'userInfo' => $userInfo]);
            }

            return redirect()->route('create_info');
        }
  
        return redirect()->route('signin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Members.create_info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = Info::create([
            'User_Email' => Auth::user()->email,
            'Address' => $request->input('address'),
            'Phone_Number' => $request->input('phoneNumber')
        ]);

        return redirect()->route('order_dashboard');
    }
}
