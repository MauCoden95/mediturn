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
    public function edit(Pacient $pacient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pacient $pacient)
    {
        //
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
