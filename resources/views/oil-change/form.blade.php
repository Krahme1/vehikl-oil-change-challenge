@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('oil-change.store') }}">
        @csrf

        <label for="previous_odometer">Odometer at Previous Oil Change (km)</label>
        <input type="number" id="previous_odometer" name="previous_odometer" value="{{ old('previous_odometer') }}">
        @error('previous_odometer')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="previous_oil_change_date">Date of Previous Oil Change</label>
        <input type="date" id="previous_oil_change_date" name="previous_oil_change_date" value="{{ old('previous_oil_change_date') }}">
        @error('previous_oil_change_date')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="current_odometer">Current Odometer (km)</label>
        <input type="number" id="current_odometer" name="current_odometer" value="{{ old('current_odometer') }}">
        @error('current_odometer')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Check</button>
    </form>
@endsection