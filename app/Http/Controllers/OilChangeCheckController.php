<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOilChangeCheckRequest;
use App\Models\OilChangeCheck;
use Carbon\Carbon;

class OilChangeCheckController extends Controller
{
    public function index()
    {
        return view('oil-change.form');
    }

    public function store(StoreOilChangeCheckRequest $request)
    {
        $validated = $request->validated();

        $kmSinceLastChange = $validated['current_odometer'] - $validated['previous_odometer'];
        $monthsSinceLastChange = Carbon::parse($validated['previous_oil_change_date'])->diffInMonths(now());

        $isDue = $kmSinceLastChange > 5000 || $monthsSinceLastChange > 6;

        $check = OilChangeCheck::create([
            ...$validated,
            'is_due' => $isDue,
        ]);

        return redirect()->route('oil-change.result', ['oilChangeCheck' => $check->id]);
    }

    public function show(OilChangeCheck $oilChangeCheck)
    {
        return view('oil-change.result', ['check' => $oilChangeCheck]);
    }
}