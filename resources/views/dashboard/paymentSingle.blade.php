<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Edit Payment')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're all paid for the {{ $vehicleInfo->name }} in {{ $vehicleInfo->tax_type }}!</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                   
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            {{ $vehicleInfo->name }} - <small>{{ $vehicleInfo->tax_type }}</small>
                        </h3>
                        <p class="card-text"><strong>Payment Date: </strong>{{ $payment->payment_date }}</p>
                        <p class="card-text"><strong>Tax: </strong>{{ $payment->tax['tax_type'] }}</p>
                        <p class="card-text"><strong>Quarters: </strong>{{ $payment->num_of_quarters }}</p>
                        <p class="card-text"><strong>Amount: </strong>${{ $payment->tax['amount'] }}</p>
                    </div>                    
                </div>
                <div class="text-center mt-3">
                    <a href="/dashboard/payments/{{ $payment->id }}/edit" class="btn btn-lg btn-success">Edit this Payment</a>
                    <a href="/dashboard/payments/{{ $payment->id }}/delete" class="btn btn-lg btn-danger">Delete</a> 
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection