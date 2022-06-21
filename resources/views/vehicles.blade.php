<!-- resources/views/hotels.blade.php -->
@extends('index')
@section('title', 'Vehicles')
@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Loop through hotels returned from controller -->
        @foreach ($vehicles as $vehicle)
        <div class="col-sm-4">
            <div class="card mb-3">

                <div class="card-body">
                    <!-- <h5 class="card-title">{{ $vehicle->name }}</h5> -->
                    <small class="text-muted">{{ $vehicle->vehicle_no }}</small>
                    <p class="card-text">{{ $vehicle->create_date }}</p>
                    <a href="/dashboard/payments/create/{{ $vehicle->id }}" class="btn btn-primary">Pay Now</a>
                </div>
            </div>    
        </div>
        @endforeach
    </div>
</div>
@endsection


<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Dashboard')
@section('content')
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage your Payments</h4>
                <p class="card-text">Modify your current payments.</p>
                <a href="/dashboard/payments" class="btn btn-primary">My Payments</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Find a Payment</h4>
                <p class="card-text">Browse Payments.</p>
                <a href="/vehicles" class="btn btn-primary">Your Vehicles</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

