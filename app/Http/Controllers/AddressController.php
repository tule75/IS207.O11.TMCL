<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Requests\StoreAddressRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;
use App\Models\default_address;
use Exception;


class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreAddressRequest $request)
    {
        //
        $province = Province::where('gso_id', $request->province)->get()->first()->name;
        
        $district = District::where('gso_id', $request->district)->get()->first()->name;

        $ward = Ward::where('gso_id', $request->ward)->get()->first()->name;
        
        try {
            $address = Address::create([
                'province' => $province,
                'district' => $district,
                'ward' => $ward,
                'phone' => $request->phone,
                'address' => $request->address,
                'user_id' => auth()->user()->id
            ]);

            if ($address->id == 1) {
                default_address::create([
                    'user_id' => auth()->user()->id,
                    'address_id' => $request->address_id,
                ]);
            }
    
            return back()->with('message', 'Cập nhật địa chỉ thành công');
        }
        catch (Exception $e) {
            return back()->with('message: ', $e->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAddressRequest $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        try {
            Address::find($request->address_id)->delete();
            return back()->with('message: ', "Xóa địa chỉ thành công");
        }
        catch (Exception $e) {
            return back()->with('message: ', $e->getMessage());
        }
        
    }

    public function get_provinces() {
        $provinces = Province::get();
        return response()->json($provinces, 202);
    }
    
    public function get_districts(Request $request) {
        $districts = District::where('province_id', $request->province_id)->get();
        dd($districts);
    }

    public function get_wards(Request $request) {
        $ward = Ward::where('district_id', $request->district_id)->get();
        dd($ward);
    }
}
