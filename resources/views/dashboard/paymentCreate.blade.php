<!-- resources/views/dashboard/reservationCreate.blade.php -->
@extends('index')
@section('title', 'Create Payment')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h2> <small class="text-muted"></small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Pay your taxes conveniently!</p>
            <form action="{{ route('payments.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="room">Tax Type</label>
                            <select class="form-control" name="tax_id">
                                @foreach ($TaxInfo as $option)
                                    <option value="{{$option->id}}">{{ $option->tax_type }} - ZMW{{ $option->amount }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="quarters">Number of Quarters</label>
                            <input class="form-control" name="num_of_quarters" placeholder="1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="created_at">Payment Date</label>
                            <input type="date" class="form-control" name="payment_date" placeholder="06/21/2022">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" class="form-control" name="amount" placeholder="Payment Amount">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Make Payment</button>
            </form>
        </div>
    </div>
</div>
@endsection

