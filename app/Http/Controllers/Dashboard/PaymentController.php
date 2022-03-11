<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'payments' =>  Payment::paginate(5)
        ];
        return view('dashboard.payments.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Payment $payment)
    {

        $data = [
            'payments' => $payment::all()
        ];
        return view('dashboard.payments.create' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $data = [
            'payment' => $payment
        ];
        return view('dashboard.payments.edit' , $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'officer_id' => 'required|unique:officers',
            'student_id' => 'required|unique:students',
            'date_payments' => 'required',
            'month_payment' => 'required',
            'year_payments' => 'required',
            'spp_id' => 'required|unique:spps',
            'total' => 'required',
            'identifier' => 'required'
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        Payment::where('identifier' , $payment->identifier)->delete();
        Alert::success('Success' , 'Data berhasil dihapus');
        return back();
    }
}
