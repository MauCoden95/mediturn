<?php

namespace App\Http\Controllers;

use App\Models\Pacient;
use Illuminate\Http\Request;

class PacientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pacient $pacient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pacient $id)
    {
        $pacient = Pacient::find($id);
        

        return view('layouts.edit-pacient', compact('pacient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pacient = Pacient::find($id);

        $pacient->update([
            'name' => $request->input('name'),
            'dni' => $request->input('dni'),
            'address' => $request->input('address'),
            'birth_date' => $request->input('birth_date'),
            'phone1' => $request->input('phone1'),
            'phone2' => $request->input('phone2'),
            'health_insurance' => $request->input('health_insurance'),
            'numbre_health_insurance' => $request->input('numbre_health_insurance'),
            'history' => $request->input('history')
        ]);

        //return back()->with('success', 'Los datos se actualizaron con éxito');

        session(['success' => 'Los datos se actualizaron con éxito']);


        dd(session('success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pacient = Pacient::find($id)->delete();

        return view('layouts.pacients');
    }
}
