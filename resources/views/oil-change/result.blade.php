@extends('layouts.app')

@section('content')
    @if ($check->is_due)
        <p class="result-due">⚠️ This car is due for an oil change.</p>
    @else
        <p class="result-not-due">✅ This car is not due for an oil change yet.</p>
    @endif

    <h3>Submitted Details</h3>
    <p><strong>Current Odometer:</strong> {{ $check->current_odometer }} km</p>
    <p><strong>Date of Previous Oil Change:</strong> {{ $check->previous_oil_change_date->format('Y-m-d') }}</p>
    <p><strong>Odometer at Previous Oil Change:</strong> {{ $check->previous_odometer }} km</p>

    <a href="{{ route('oil-change.form') }}" class="button-link">Check Another Car</a>
@endsection