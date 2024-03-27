<?php

namespace App\Http\Controllers;

use App\Models\Boeking;
use App\Models\kamer;
use Illuminate\Http\Request;

class BoekingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boekings = Boeking::all();

        return view("boeking", compact("boekings"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamers = kamer::all();
        return view('boeking.create', compact('kamers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boekings = new Boeking([
            'datum_booking' => $request->datum_booking,
            'naam_booking' => $request->naam_booking,
            'adres_booking' => $request->adres_booking,
            'creditcard_booking' => $request->creditcard_booking,
            'aankomst_booking' => $request->aankomst_booking,
            'vertrek_booking' => $request->vertrek_booking,
            'nummer_booking' => $request->nummer_booking,
            'nummer_booking' => $request->nummer_booking,
            'kamer_id' => $request->kamer_id,

            ]);
        $boekings->save();
        return redirect('boeking');
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
        $kamers = Kamer::all();
        $boeking = Boeking::find($id);
        return view('boeking.edit', compact('boeking', 'kamers'));

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
        $boeking = boeking::where('id', '=', $id)->first();

        $boeking->update($request->all());


        return redirect('/boeking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boeking = boeking::find($id);
        $boeking->delete();
        return redirect('/boeking');
    }
}
