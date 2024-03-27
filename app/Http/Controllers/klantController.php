<?php

namespace App\Http\Controllers;

use App\Models\Boeking;
use App\Models\kamer;
use Illuminate\Http\Request;

class klantController extends Controller
{
    public function index()
    {
        $kamers= kamer::all();

        return view("klant.index", compact("kamers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamers = kamer::all();
        return view('klant.create', compact('kamers'));

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
        return redirect('/bedankt');
    }
}
