<?php

namespace App\Http\Controllers;

use App\Models\Maladie;
use App\Http\Requests\StoreMaladieRequest;
use App\Http\Requests\UpdateMaladieRequest;

class MaladieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaladieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaladieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maladie  $maladie
     * @return \Illuminate\Http\Response
     */
    public function show(Maladie $maladie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maladie  $maladie
     * @return \Illuminate\Http\Response
     */
    public function edit(Maladie $maladie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaladieRequest  $request
     * @param  \App\Models\Maladie  $maladie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaladieRequest $request, Maladie $maladie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maladie  $maladie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maladie $maladie)
    {
        //
    }
}
