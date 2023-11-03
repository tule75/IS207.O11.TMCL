<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Http\Requests\StorewatchRequest;
use App\Http\Requests\UpdatewatchRequest;
use Illuminate\Support\Str;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function index()
    {
        //
        $watches = Watch::all();
        return $watches;
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
        try {
            $slug = Str::slug($request->name, '-');
            $watches = Watch::create([
                'name' => $request->name,
                'price' => $request->price,
                'storage' => $request->input('storage'),
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'description' => $request->description,
                'gender' => $request->gender,
                'slug' => $slug
            ]);
        } catch (\Exception $e) { 
            echo("error");
            dd($e);
        }
        

        dd($watches);
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
