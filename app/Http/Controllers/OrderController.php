<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\Order_items;
use App\Models\Voucher;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Hiển thị toàn bộ order trong một khoảng thời gian
    public function getAll(Request $request)
    {
        if ($request->has('all') && $request->get('all') == true) {
            return view('order.index', Orders::with(['watches' => 
                function ($query) {
                    $query->select('watches.id', 'watches.name', 'watches.img1', 'watches.img2', 'watches.img3');
                }, 'voucher' => function ($query) {
                    $query->select('id', 'code', 'discount');
                }])->paginate(20)
            ); 
        } else if ($request->has('start_date') && $request->has('end_date')){
            return view('order.index', Orders::where('created_at', '>=', 'start_date')->where('created_at', '<=', 'end_date')->with(['watches' => 
                function ($query) {
                    $query->select('watches.id', 'watches.name', 'watches.img1', 'watches.img2', 'watches.img3');
                }, 'voucher' => function ($query) {
                    $query->select('id', 'code', 'discount');
                }])->paginate(20)
            ); 
        }        
    }

    public function getPending() 
    {
        return Orders::where('status', '=', 'Pending')->get();
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
            if ($request->has('voucher_code')) {
                $voucher = Voucher::where('code', $request->get('voucher_code'))->first();
            }

            $order = Orders::create([
                'address_id' => $request->address_id,
                'user_id' => auth()->user()->id,
                'gift' => $request->has('gift') ? true : false,
                'description' => $request->has('description') ? $request->description : null,
                'total_prices' => 0,
            ]);
            $price = OrderIteamsController::store([
                'order_id' => $order->id,
                'watches_id' => $request->watches_id,
                'quantity' => $request->quantity
            ]);
            if ($price == -1) {
                $order->delete();
                return back()->withErrors(['message' => 'Lỗi hết hàng']);
            }
            if ($voucher->status == 'active') { 
                $order->total_prices = $this->getTotalPrices($price, $voucher);
                $order->voucher_id = $voucher->id;
                $order->save();
            } else {
                $order->total_prices = $price;
                $order->voucher_id = null;
                $order->save();
            }
            return redirect('/')->withInput(['message'=> 'Mua thành công']);
        } catch (Exception $e) {
            dd($e);
            return back()->withErrors(['message'=> $e->getMessage()]);
        }
    }

    public function getTotalPrices($price, $voucher) {
        if ($voucher->rule == 'vip' && $voucher->minimum <= auth()->user()->score)
        {
            if ($voucher->type == 'percent') {
                return $price * (1- $voucher->discount);
            }
            else {
                return $price - $voucher->discount;
            }
        } else if ($voucher->rule == 'money' && $voucher->minimum <= $price) 
        {
            if ($voucher->type == 'percent') {
                return $price * (1 - $voucher->discount);
            }
            else {
                return $price - $voucher->discount;
            }
        }
        return $price;
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
        
    }

    public function showForUser() 
    {
        $user_id = auth()->user()->id;
        return view('order.showForUser', Orders::where('user_id', $user_id)->with(['watches' => function ($query) {
            $query->select('watches.id', 'watches.name', 'watches.img1', 'watches.img2', 'watches.img3');
        }, 'voucher' => function ($query) {
            $query->select('id', 'code', 'discount');
        }])->get());
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
    public function destroy(Orders $order)
    {
        //
        try {
            Order_items::destroy($order->id);
            $order->delete();
            return back()->withInput(['message' => 'Xóa thành công']);
        } catch (Exception $e) {
            dd($e);
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}
