<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate mandatory fields
        $request->validate([
            'full-name'    => 'required|string|max:50',
            'phone-num1'   => 'required|string|max:20',
            'upload-photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'upload-file'  => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Instantiate your customer model
        $customer = new Customer();

        // 3. Map inputs with safety fallbacks
        $customer->name            = $request->input('full-name');
        $customer->passport_type   = $request->input('national-id') ?? '';
        $customer->passport        = $request->input('passport-num') ?: 'TEMP-' . uniqid();
        $customer->id_expiry_date  = $request->input('date') ?? now()->format('Y-m-d');
        $customer->phone           = $request->input('phone-num1');
        $customer->phone_2         = $request->input('phone-num2') ?: '000-' . rand(10000, 99999);
        $customer->address         = $request->input('address') ?? '';
        $customer->emergency_name  = $request->input('emer-name') ?? '';
        $customer->emergency_phone = $request->input('emer-phone') ?? '';
        $customer->note            = $request->input('note') ?? '';
        $customer->status          = 1;

        // 🛑 FIX: Convert HTML text item types into numbers matching your INT column
        $itemText = $request->input('item');
        if ($itemText == 'jewelry') {
            $customer->pledge = 1;
        } elseif ($itemText == 'electronics') {
            $customer->pledge = 2;
        } elseif ($itemText == 'vehicle') {
            $customer->pledge = 3;
        } else {
            $customer->pledge = 0; // Default fallback number
        }

        // 4. Handle Profile Photo Upload
        if ($request->hasFile('upload-photo')) {
            $photoPath = $request->file('upload-photo')->store('profiles', 'public');
            $customer->profile_photo = $photoPath;
        } else {
            $customer->profile_photo = 'default-profiles/' . time() . '-' . rand(10, 99) . '.png'; 
        }

        // 5. Handle ID Image Upload
        if ($request->hasFile('upload-file')) {
            $filePath = $request->file('upload-file')->store('id_images', 'public');
            $customer->id_image = $filePath;
        } else {
            $customer->id_image = 'default-ids/' . time() . '-' . rand(10, 99) . '.png'; 
        }

        // 6. Safe database save execution
        try {
            $customer->save();
            return redirect()->back()->with('success', 'Customer added to system successfully!');
        } catch (\Illuminate\Database\QueryException $e) {
            dd([
                'ERROR_MESSAGE' => 'Your database rejected this submission.',
                'MYSQL_SAYS' => $e->getMessage(),
                'TIP' => 'Check if your ID column has AUTO_INCREMENT enabled, or if columns are locked to UNIQUE in phpMyAdmin.'
            ]);
        }
    }
}
