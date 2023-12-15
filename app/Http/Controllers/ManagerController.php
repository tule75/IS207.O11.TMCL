<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Models\Orders;
use App\Models\User;
use App\Models\Watch;
use Exception;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    public function index() 
    {
        $watch = Watch::orderBy('created_at', 'DESC')->take(10)->get();
        $order = Orders::whereYear('created_at', date('Y'))
        ->whereMonth('created_at', '>=', (int)date('M') - 2)
        ->with(['user' => function ($query) {
            return $query->select('name', 'email', 'score');
        }, 'watches' => function () {}, 
        'voucher' => function () {}, 
        'payment' => function () {}])->get();
        return view('manager', ['order' => $order, 'watches' => $watch]);
    }

    public function getRevenue($request) {
        try {
            return Orders::whereDate('created_at', '>=', $request->start_date)
            ->whereDate('created_at', '<=', $request->end_date)->sum('total_prices');
        } catch (\Exception $e) {
            $e->getMessage();
        }
    }

    public function allStaff() 
    {
        return User::where('role', 'staff')->paginate(10);
    }

    public function searchStaff(Request $request)
    {
        return User::where('role', 'staff')->search($request->q)->paginate(10);
    }

    public function createStaff(Request $request) 
    {
        try {
           $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'staff'
            ]);

            return back()->withInput(['message' => 'Staff created successfully']);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
