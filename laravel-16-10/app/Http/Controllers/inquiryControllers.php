<?php

namespace App\Http\Controllers;

use App\Events\InquiryEventLog;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class inquiryControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create($propertyId)
    {
        return view("contact", ["propertyId" => $propertyId]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $consulta = new Inquiry();
        $consulta->name = $request->name;
        $consulta->email = $request->email;
        $consulta->message = $request->message;
        $consulta->property_id = $request->property_id;

        $consulta->save();

        // $evt = new InquiryEventLog($consulta);
        event(new InquiryEventLog($consulta));

        // return redirect("/", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Inquiry $inquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inquiry $inquiry)
    {
        //
    }
}
