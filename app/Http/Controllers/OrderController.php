<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function __construct($value=''){
        $this->middleware('role:admin')->except('store');
        $this->middleware('role:customer')->only('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders= Order::all(); 
        // dd($items); today
        return view('backend.orders.index',compact('orders'));
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
        //
        // dd($request->notes);
           // dd($request->notes);
        $cartArr= json_decode($request->shop_data);
        $total=0;
        foreach ($cartArr as $row) {
            # code...
            $total += ($row->price * $row->qty);
        }
        $order = New Order;
        $order->voucherno = uniqid();
        $order->orderdate = date('Y-m-d');
        $order->user_id = Auth::id(); //auth id
        $order->note = $request->notes;
        $order->total = $total;
        $order->save(); //only save into order table

        // save into order_detail
        foreach ($cartArr as $row) {
            $order->items()->attach($row->id,['qty'=>$row->qty]);
        }

        return 'Successful!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $order=Order::find($id);

        // dd($item);
        return view('backend.orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
