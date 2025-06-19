<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestDrive;

class TestDriveController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'nullable|email',
            'address' => 'nullable',
            'car_model' => 'required',
            'test_date' => 'required|date'
        ]);

        TestDrive::create([
            'name'       => $request->name,
            'phone'      => $request->phone,
            'email'      => $request->email,
            'address'    => $request->address,
            'car_model'  => $request->car_model,
            'test_date'  => $request->test_date
        ]);


        return back()->with('success', 'Đăng ký thành công!');
    }
}

