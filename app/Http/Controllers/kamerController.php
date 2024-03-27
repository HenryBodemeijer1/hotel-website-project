<?php

namespace App\Http\Controllers;

use App\Models\kamer;
use Illuminate\Http\Request;

class kamerController extends Controller
{
    public function kamer()
    {
        $kamers = kamer::all();

        print_r($kamers);

        return view('kamer', ['kamers' => $kamers]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamers = kamer::all();

        return view("kamer", compact("kamers"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('foto')) {
            $image = $request->file('foto');
            $foto = $image->getClientOriginalName();
            $image->storeAs('public', $foto);

        }
            $kamer = new kamer([
                'naam' => $request->naam,
                'nummer' => $request->nummer,
                'foto' => $foto,
                'prijs' => $request->prijs,
                'opervalkte' => $request->opervalkte,
                'aantal_personen' => $request->aantal_personen,
                'bad' => $request->bad,
                'minibar' => $request->minibar,
            ]);

        $kamer->save();
        return redirect('/kamer');


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
        $kamers = kamer::find($id);
        return view('kamer.edit', compact('kamers'));

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

        $kamer = Kamer::where('id', '=', $id)->first();

        $kamer->update($request->all());


        return redirect('/kamer');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamer = kamer::find($id);
        $kamer->delete();
        return redirect('/kamer');

    }
}
