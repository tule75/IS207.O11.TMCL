<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Http\Requests\StoreCartsRequest;
use App\Http\Requests\UpdateCartsRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Foundation\Http\FormRequest;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $carts = Carts::where('user_id', auth()->user()->id)->with(['watches' => function ($query) {
            $query->select('watches.id', 'watches.name', 'watches.img1', 'watches.img2', 'watches.img3');}
        ])->get();
        
        return view('carts.index', ['carts' => $carts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartsRequest $request)
    {
        //
        try {
            $quantity = 1;
            if ($request->has('quantity')) {
                $quantity = $request->quantity;
            }
            $cart = Carts::where('user_id', auth()->user()->id)->where('watch_id', $request->watch_id)->first();
            if ($cart) {
                $cart->quantity += $quantity;
                $cart->save();
            }
            else {
                Carts::create([
                    'user_id' => auth()->user()->id,
                    'quantity' => $quantity,
                    'watch_id' => $request->watch_id
                ]);
            }      
            return response()->noContent();  
        }
        catch (Exception $e) {
            return $e->getMessage();
        }
        

    }

    /**
     * Display the specified resource.
     */
    // public function show()
    // {
    //     //
    //     $cart = Carts::where('user_id', auth()->user()->id)->get();
    //     dd($cart);
    //     return view('', ['carts' => $cart]);
    // }

    /**
     * update value of the cart
     */
    public function update(Carts $carts, $status)
    {
        //
        if ($status == 'plus') {
            $carts->quantity++;
            $carts->save();
        } else if ($status == 'minus') 
        {
            $carts->quantity--;
            if ($carts->quantity == 0) {
                $carts->delete();
            } else {
                $carts->save();
            }
        }
        return response()->noContent();
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateCartsRequest $request, Carts $carts)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carts $carts)
    {
        //
        try {
            $carts->delete();
            return back()->withInput(['message' => "success"]);
        } catch (\Exception $e) { 
            return $e->getMessage();
        }
    }

    public static function minusAfterBuy($watch_id, $quantity, $uid) 
    {
        try {
            $cart = Carts::where('watch_id', $watch_id)->where('user_id', $uid)->first();
            if ($cart->quantity > $quantity) {
                $cart->quantity -= $quantity;
                $cart->save();
            } else {
                $cart->delete();
            }
        } catch(Exception $e) {

        }
        
    }
}
