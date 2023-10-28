<?php

namespace App\Http\Controllers;

use App\Models\Watch;
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
        if ($request) {
            redirect('/');
        }
        redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Watch $watch)
    {
        //
        return view('products.watch');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Watch $watch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewatchRequest $request, Watch $watch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Watch $watch)
    {
        //
    }
}
