<!-- resources/views/dashboard/reservationEdit.blade.php -->
@extends('index')
@section('title', 'Edit Payment')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            
        </div> 
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Pay your taxes conveniently!</p>
            <form action="{{ route('payments.update', $payment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="room">Tax Type</label>
                            <select class="form-control" name="tax_id" value="{{ old('tax_id', $payment->tax_id) }}">
                                @foreach ($vehicleInfo->tax as $option)
                                    <option value="{{$option->id}}">{{ $option->tax_type }} - ${{ $option->amount }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="quarters">Number of quarters</label>
                            <input class="form-control" name="num_of_quarters" value="{{ old('num_of_quarters', $payment->num_of_quarters) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="created_at">Payment Date</label>
                            <input type="date" class="form-control" name="payment_date" placeholder="06/21/2022" value="{{ old('payment_date', $payment->payment_date) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label for="amount">Amount</label>
                            <input type="text" class="form-control" name="amount" placeholder="Payment Amount" value="{{ old('amount', $payment->amount) }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <form action="{{ route('payments.destroy', $payment->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <p class="text-right">
            <button type="submit" class="btn btn-sm text-danger">Delete Payment</button>
        </p>
    </form>
</div>
@endsection