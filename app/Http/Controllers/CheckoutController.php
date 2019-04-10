<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use App\checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = Auth::user();
        $shipping = DB::table('shipping_address')->insert([
            'fullname'=>$request->fullname,
            'address'=>$request->address,
            'address2'=>$request->address2,
            'city'=>$request->city,
            'province'=>$request->province,
            'postal_code'=>$request->email,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'user_id'=>$users->id
            ]);
            if($shipping){
                $shipping = DB::table('shipping_address')->where('user_id', $users->id)->value('id');
                DB::table('billing_address')->insert([
                'fullname'=>$request->fullname,
                'address'=>$request->address,
                'address2'=>$request->address2,
                'city'=>$request->city,
                'province'=>$request->province,
                'postal_code'=>$request->email,
                'phone_number'=>$request->phone_number,
                'email'=>$request->email,
                'user_id'=>$users->id,
                'shipping_id'=>$shipping
                ]);
            }            
        return Redirect::to('login');
    }
    public function destroy($id)
    {
        //
    }
}
