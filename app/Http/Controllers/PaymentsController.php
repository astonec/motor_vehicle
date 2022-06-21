<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Payment; 
use App\Models\Vehicle; 
use App\Models\Tax;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = DB::table('payments')->join('vehicles', 'payments.vehicle_id', '=', 'vehicles.id') 
        ->join('users', 'users.id', '=', 'payments.user_id')
        ->select('users.*', 'vehicles.name', 'payments.amount', 'payments.payment_date')
        ->get();;

        return view('dashboard.payments')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($vehicle_id)
    {
        $vehicleInfo = Vehicle::find($vehicle_id);
        $TaxInfo = Tax::All();
        return view('dashboard.paymentCreate', compact('vehicleInfo', 'TaxInfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['user_id' => 1]);
        $request->request->add(['vehicle_id' => 1]);
        Payment::create($request->all());

        return redirect('dashboard/payments')->with('success', 'Payment created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Payment::with('tax', 'tax.vehicle')->get()->find($payment->id);
        $vehicle_id = $payment->tax->vehicle_id;
        $vehicleInfo = Hotel::with('taxs')->get()->find($hotel_id);

        return view('dashboard.paymentSingle', compact('payment', 'vehicleInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Reservation::with('tax', 'tax.vehicle')->get()->find($payment->id);
        $vehicle_id = $payment->tax->vehicle_id;
        $vehicleInfo = Vehicle::with('vehicles')->get()->find($vehicle_id);

        return view('dashboard.paymentEdit', compact('payment', 'vehicleInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payment->user_id = 1;

        $payment->save();
        return redirect('dashboard/payments')->with('success', 'Successfully updated your payment!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = Payment::find($payment->id);
        $payment->delete(); 

        return redirect('dashboard/payments')->with('success', 'Successfully deleted your payment!');

    }
}
