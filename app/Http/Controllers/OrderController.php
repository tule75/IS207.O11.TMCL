<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\Order_items;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Orders::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return về view/order/create.blade.php
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrdersRequest $request)
    {
        //
        try {
            $order = Orders::create([
                'address_id' => $request->address_id,
                'user_id' => auth()->user()->id,
                'total_prices' => $request->total_price || 0,
                'discount' => $request->discount || 0
            ]);
            $price = OrderIteamsController::store([
                'order_id' => $order->id,
                'watches_id' => $request->watches_id,
                'quantity' => $request->quantity
            ]);
            if ($price == -1) {
                return back()->withErrors(['message' => 'Lỗi hết hàng']);
            }
            $order->total_prices = $price;
            $order->save();

            return back()->withInput(['message'=> 'Mua thành công']);
        } catch (Exception $e) {
            return back()->withErrors(['message'=> $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
        
    }

    public function showForUser($user_id) 
    {
        return response()->json(Orders::where('user_id', $user_id)->get());
        // $order = Orders::where('user_id', $user_id)->first();
        // return response()->json($order->orders);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    // /order/update/{order}
    public function update(UpdateOrdersRequest $request, Orders $order)
    {
        //
        try {
            if ($request->status == 'Success') {
                if (auth()->user()->id === $order->user_id) {
                    $order->status = $request->status;
                }
            } else if ($request->status == 'Shipping') {
                $order->status = $request->status;
            }
            $order->save();
            // dd($order);
            return back()->withInput(['message' => 'Order updated successfully']);
        } catch(Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    // $order = order_id 
    // /order/delete/{order} ghi vậy cho gọn :))
    public function destroy(Orders $order)
    {
        //
        try {
            Order_items::destroy($order);
            Orders::find($order)->each->delete();
            return back()->withInput(['message' => 'Xóa thành công']);
        } catch (Exception $e) {
            dd($e);
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}
