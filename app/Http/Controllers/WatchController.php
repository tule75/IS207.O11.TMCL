<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Http\Requests\StoreWatchRequest;
use App\Http\Requests\UpdateWatchRequest;
use Exception;
use Illuminate\Http\Request;
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
    public function store(StoreWatchRequest $request)
    {
        //
        try {
            $img1 = $request->file('img1')->store('watch', 'public');
            // Kiểm tra có img2 không
            if ($request->hasFile('img2')) {
                $img2 = '/storage' . "/" . $request->file('img2')->store('watch', 'public');
            } else 
            {
                $img2 = null;
            }
            //kiểm tra có img3 không
            if ($request->hasFile('img3')) {
                $img3 = '/storage' . "/" . $request->file('img3')->store('watch', 'public');
            } else 
            {
                $img3 = null;
            }
            $slug = Str::slug($request->name, '-');
            // $watches = 
            Watch::create([
                'name' => $request->name,
                'price' => $request->price,
                'storage' => $request->storage,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'description' => $request->description,
                'gender' => $request->gender,
                'slug' => $slug,
                'img1' => '/storage' . "/" . $img1,
                'img2' => $img2,
                'img3' => $img3
            ]);
            // dd($img1);
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
    public function update(UpdateWatchRequest $request, Watch $watch)
    {
        //
        try {
            if ($request->hasFile('img1')) {
                $img1 = '/storage' . "/" . $request->file('img1')->store('watch', 'public');
            } else 
            {
                $img1 = null;
            }
            // Kiểm tra có img2 không
            if ($request->hasFile('img2')) {
                $img2 = '/storage' . "/" . $request->file('img2')->store('watch', 'public');
            } else 
            {
                $img2 = null;
            }
            //kiểm tra có img3 không
            if ($request->hasFile('img3')) {
                $img3 = '/storage' . "/" . $request->file('img3')->store('watch', 'public');
            } else 
            {
                $img3 = null;
            }
            $watch->fill([
                'name' => $request->has('name') ? $request->name : $watch->name,
                'price' => $request->has('price') ? $request->price : $watch->price,
                'storage' => $request->has('storage') ? $request->storage : $watch->storage,
                'description' => $request->has('description') ? $request->description : $watch->description,
                'gender' => $request->has('gender') ? $request->gender : $watch->gender,
                'img1' => $img1 != null ? $img1 : $watch->img1,
                'img2' => $img2 != null ? $img2 : $watch->img2,
                'img3' => $img3 != null ? $img3 : $watch->img3
            ])->save();
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

    //test
    public function add_img(Request $request) {
        $img = $request->file('img1')->store('watch', 'public');

        dd($img);
    }
}
