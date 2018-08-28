<?php

namespace App\Http\Controllers;

use App\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = Auth::user()->prescriptions()->where('pharm_response', !null)->get();
        $pending_prescriptions = Auth::user()->prescriptions()->where('pharm_response', null)->get();
        return view('dashboard.prescriptions', compact('prescriptions', 'pending_prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.request_prescription');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate User Input
        $this->validate($request, [
            'name' => 'max:197',
            'phone' => 'required',
            'email' => 'email',
            'age' => 'required',
            'title' => 'max:197',
            'description' => 'required'
        ]);

        $user = Auth::user();

        $prescription = new Prescription();

        $prescription->name = $request->name;
        $prescription->phone = $request->phone;
        $prescription->email = $request->email;
        $prescription->age = $request->age;
        $prescription->title = $request->title;
        $prescription->description = $request->description;
        $prescription->reference = str_random(7);

        $user->prescriptions()->save($prescription);

        Session::flash('success', 'Prescription Requested!');
        return redirect()->back();
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
