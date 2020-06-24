<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\DrugOrder;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Location::all();

        return view('data.update')->with('data', $data);
    }

    public function viewdata()
    {
        $data = Location::all();

        return view('data.view')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'patientcode' => 'required',
            'patientname' => 'required',
            'drugname' => 'required',
            'wardname' => 'required',
            'time' => 'required',
        ]);

        $data = new Location;
        $data->patient_code = $request->input('patientcode');
        $data->patient_name = $request->input('patientname');
        $data->drug_name = $request->input('drugname');
        $data->ward_name = $request->input('wardname');
        $data->time = $request->input('time');
        $data->save();

        $order = new DrugOrder;
        $order->patient_code = $request->input('patientcode');
        $order->drug_name = $request->input('drugname');
        $order->save();

        return redirect('/update')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Location::where('patient_code', $id)->get();

        return view('data.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Location::where('patient_code', $id)->get();
        return view('data.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $patient_code)
    {
    
        $data = Location::where('patient_code', $patient_code)->first();
        $data->patient_code = $request->input('patientcode');
        $data->patient_name = $request->input('patientname');
        $data->drug_name = $request->input('drugname');
        $data->ward_name = $request->input('wardname');
        $data->time = $request->input('time');
        $data->save();

        $order = DrugOrder::where('patient_code', $patient_code)->first();
        $order->patient_code = $request->input('patientcode');
        $order->drug_name = $request->input('drugname');
        $order->save();

        return redirect('/update')->with('success', 'Post Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($patient_code)
    {
        $data = Location::where('patient_code', $patient_code)->first();
        $order = DrugOrder::where('patient_code', $patient_code)->first();
        $data->delete();
        $order->delete();
        
        return redirect('/update');
    }
}
