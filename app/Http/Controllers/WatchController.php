<?php

namespace App\Http\Controllers;

use App\Models\watch;
use App\Http\Requests\StorewatchRequest;
use App\Http\Requests\UpdatewatchRequest;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "hello";
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
    public function store(StorewatchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(watch $watch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(watch $watch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewatchRequest $request, watch $watch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(watch $watch)
    {
        //
    }
}
