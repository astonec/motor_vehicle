@extends('index')
@section('title', 'Payments')
@section('content')
<div class="container mt-5">
    <h2>Your Payments</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Vehicle</th>
            <th scope="col">Payment Date</th>
            <th scope="col">Amount</th>
            <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
            <tr>
                <td>{{ $payment->name }}</td>
                <td>{{ $payment->payment_date }}</td>
                <td>ZMW{{ $payment->amount }}</td>
            <td><a href="/" class="btn btn-sm btn-success">Edit</a></td>
            </tr>
            @endforeach            
        </tbody>
    </table>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
</div>
@endsection

