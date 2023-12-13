<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Orders;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        Orders::where();
        return view('staff/staff');
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
    public function store(StoreStaffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaffRequest $request, User $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $staff)
    {
        //
    }
}
