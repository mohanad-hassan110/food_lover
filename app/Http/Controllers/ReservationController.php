<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation; 

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'table_number' => 'required|integer',
            'reservation_time' => 'required|date',
            'number_of_people' => 'required|integer|min:1',
        ]);

        Reservation::create($validatedData);

        return redirect()->back()->with('success', 'Reservation submitted successfully!');
    }
}
