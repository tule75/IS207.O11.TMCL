<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Http\Requests\StorewatchRequest;
use App\Http\Requests\UpdatewatchRequest;
use Exception;
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
        return view('watch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorewatchRequest $request)
    {
        //
        try {
            $slug = Str::slug($request->name, '-');
            // $watches = 
            Watch::create([
                'name' => $request->name,
                'price' => $request->price,
                'storage' => $request->input('storage'),
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'description' => $request->description,
                'gender' => $request->gender,
                'slug' => $slug
            ]);
            // dd($watches);
            return back()->withInput(['message' => 'Successfully created']);
        } catch (\Exception $e) { 
            echo("error");
            dd($e);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Watch $watch)
    {
        //
        // return view('products.watch');
        return view('watch.show', [$watch]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Watch $watch)
    {
        //
        return view('watch.edit', $watch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewatchRequest $request, Watch $watch)
    {
        //
        try {
            $watch->fill($request->all())->save();
            return back()->withInput(['message' => 'successfully updated']);
        } catch (Exception $e) {
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Watch $watch)
    {
        //
        try {
            $watch->delete();
            return back()->withInput(['message' => 'Xóa thành công']);
        } catch (\Exception $e) { 
            dd($e);
        }
    }

    // Show all deleted watch
    public function destroyed() {
        return Watch::withTrashed()->get();
    }

    // restore deleted watch
    public function restore($watch) {
        try {
            Watch::withTrashed()->find($watch)->restore();
            return back()->withInput(['message' => 'Xóa thành công']);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
